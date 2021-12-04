<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stocks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/CSS/style.css" rel="stylesheet">
</head>


<p style="background: white">

   <!-- Start Header -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index">EducationFirst</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index">Back to main page</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

   <!-- //* ==================== Hero Section ==================== -->
   <section id="hero">
       <div class="hero-container">
           <h3>Welcome to <strong>EducationFirst</strong></h3>
           <h1>Have you ever asked yourself how entrepreneurs or businessmen work with money?</h1>
           <h2>Find latest update about world of stocks and other predicitons</h2>
       </div>
   </section>
   <!-- //* ==================== End Hero ==================== -->

   <!-- Start Stocks Menu -->
    <section class="container">
        <div class="row justify-content-md-center">
            <div class="col-md">
                <div class="row justify-content-md-center mb-4">
                    <form class="form-inline" action="/stocksearch" method="POST">
                            @csrf
                            <label class="sr-only text-dark mb-3">Search about a stock</label>
                            <input type="text" name="text" class="form-control mb-3" id="stocksymb" placeholder="Type symbol...">
                            <button type="submit" class="btn btn-success mb-2">Show more</button>
                    </form>
                </div>

                <div class="row justify-content-md-center">
                    <?php
                        $info = session('searchResult');
                    ?>
                    @if($info != null)
                        <div id="infoCard" class="row justify-content-md-center">
                            <div class="card text-white bg-success mb-3 w-80">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Statistics about</h5>
                                    <p class="card-text">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td><?php echo $info[1];?></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Symbol</td>
                                                <td><?php echo $info[0];?></td>
                                            </tr>
                                            <tr>
                                                <td>Market</td>
                                                <td><?php echo $info[2];?></td>
                                            </tr>
                                            <tr>
                                                <td>Open</td>
                                                <td><?php echo $info[3];?></td>
                                            </tr>
                                            <tr>
                                                <td>Close</td>
                                                <td><?php echo $info[4];?></td>
                                            </tr>
                                            <tr>
                                                <td>High</td>
                                                <td><?php echo $info[5];?></td>
                                            </tr>
                                            <tr>
                                                <td>Low</td>
                                                <td><?php echo $info[6];?></td>
                                            </tr>
                                            <tr>
                                                <td>Volume</td>
                                                <td><?php echo $info[7];?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </section>

<section class="container">
    <div class="row justify-content-md-center">
        <div class="col-md">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded w-100">
                <div class="card-body">
                    <h5 class="card-title text-dark">Exchange Rates</h5>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td scope="col">Currencies</td>
                                <td scope="col">Ask</td>
                                <td scope="col">Average 50d</td>
                                <td scope="col">Change 50d</td>
                                <td scope="col">Change %50d</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($DataExchange as $data)
                                    <tr>
                                    @foreach ($data as $d)
                                            <td>{{$d}}</td>
                                    @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded w-100">
            <div class="card-body">
                <h5 class="card-title text-dark">Hot Stocks</h5>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td scope="col">Symbol</td>
                            <td scope="col">Low</td>
                            <td scope="col">High</td>
                            <td scope="col">Share Volume</td>
                            <td scope="col">Change</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($DataTopStock as $data)
                            <tr>
                                @foreach ($data as $d)
                                    <td>{{$d}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- ======= Footer ======= -->
   <footer id="footer" style = "background:#282727">

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


  <script src="/JS/stockinfo.js"></script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/JS/main.js"></script>

</body>

</html>
