<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Games</title>
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


<body style="background: white">

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
           <h2>Well they certainly don't play games :)) , but we still encourage you to try all our services</h2>
       </div>
   </section>
   <!-- //* ==================== End Hero ==================== -->

   <!-- Start Game Menu -->
   <section class="container">
       <div class="row">
           <div class="card col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
               <img class="card-img-top" src="/img/games_pictures/Choices.jpg" alt="Card image cap">
               <div class="card-body" style="text-align: center">
                   <a href="#firstgame">
                        <button id="startfgame" type="button" class="btn btn-dark btn-lg" onclick="choosefirstgame()">Start playing Choices</button>
                   </a>
               </div>
           </div>
           @guest
           <div class="card col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
               <div class="card-body" style="text-align: center">
                   <h1 class="text-dark">If you want to play more games you need to login!</h1>
               </div>
           </div>
           @else
           <div class="card col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
               <img class="card-img-top" style="max-height: 419px" src="/img/games_pictures/puzzle.jpg" alt="Card image cap">
               <div class="card-body" style="text-align: center">
                   <a href="#chosengame">
                       <button id="startsgame" type="button" class="btn btn-dark btn-lg" onclick="choosesecondgame()">Start playing Match</button>
                   </a>
               </div>
           </div>
           <div class="card col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
               <img class="card-img-top" style="max-height: 419px" src="/img/games_pictures/coming_soon.jpg" alt="Card image cap">
               <div class="card-body" style="text-align: center">
                   <button type="button" class="btn btn-dark btn-lg" onclick="">Coming Soon</button>
               </div>
           </div>
           @endguest
       </div>
   </section>

<!--d-flex align-items-center-->

  <section id="chosengame" class="d-flex align-items-center" style="height: 900px; color: black">
    <div id="introwindow" class="container container-fluid border border-3 border-dark w-75 my-5" style="height: 80%; display: inline-block;">
      <table id="tabletext" class="w-100 h-100">
        <tbody>
          <tr>
            <td id="introtext" style="text-align: center;"> Choose a game from above and you will can play it here!
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="firstgame" class="container container-fluid border border-3 border-dark w-75 my-5" style="height: 80%; display: none;">

      <div class="col justify-content-start w-100 h-100">

        <div id="barsprog" class="col justify-content-start mt-3 w-100 h-25" style="display: none;">
          <div class="col justify-content-start w-100 h-100 d-inline-block">
            <div class="progress w-100 h-10 d-inline-block my-2">
              <div id="focus" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress w-100 h-10 d-inline-block my-2">
              <div id="connec" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress w-100 h-10 d-inline-block my-2">
              <div id="happ" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="w-100 h-10 d-inline-block my-2">
              <h4 id="mon" class="d-flex justify-content-center h-100"></h4>
            </div>
          </div>
        </div>


        <div class="d-flex justify-content-center d-inline-block w-100 h-50 my-4" style="position: relative;">
          <div id="initdiv" class='w-75 h-100 rounded bg-success' style="position: absolute; display: none;">
            <div class="d-flex align-items-center w-100 h-100">
              <div class="d-flex justify-content-around w-100 h-25">
                <div class="col-4 h-100 w-25">
                  <h4 class="text-white">GPA:</h4>
                  <select id="gpa" class="form-control">
                    <option selected="selected">Select an option</option>
                    <option>4-5</option>
                    <option>3-4</option>
                    <option>2-3</option>
                    <option>1-2</option>
                    <option>0-1</option>
                  </select>
                </div>
                <div class="col-4 h-100 w-25">
                  <h4 class="text-white">Activities:</h4>
                  <select id="act" class="form-control">
                    <option selected="selected">Select an option</option>
                    <option>Many</option>
                    <option>Normal</option>
                    <option>Few</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-center w-75 h-100">
            <p id="div0vh1" style="padding: 10px; display: none;" class="card-body border border-3 border-dark my-2"> Bine ai venit la facultate !!! Trebuie sa inveti sa te descurci financiar pentru a avea un lifestyle santos si a putea face performanta !!! Felicitari pentru rezultate, insa nu uita ca acestea trebuie mentinute !!!
            </p>

            <h3 id="div0vh2" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> Bine ai venit la facultate !!! Trebuie sa inveti sa te descurci financiar pentru a avea un lifestyle santos si a putea face performanta !!! Rezultatele sunt bune, insa intotdeauna este loc pentru mai bine !!!
            </h3>

            <h3 id="div0vh3" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> Bine ai venit la facultate !!! Trebuie sa inveti sa te descurci financiar pentru a avea un lifestyle santos si a putea face performanta !!! Chiar daca rezultatele nu arata prea bine tu poti sa le faci sa arate !!!
            </h3>

            <h3 id="div1vh1" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> In primul weekend colegii te invita la o petrecere. In acelasi timp un amic iti ofera sansa de a castiga 100RON daca il ajuti sa se mute in noua camera.
            </h3>

            <h3 id="div2vh1" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> PETRECI SI MORI DE FOAME!
            </h3>

            <h3 id="div3vh1" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> BRAVO BAIAT BUN MARS LA MUNCA!
            </h3>
          </div>
        </div>

        <div class="btn-toolbar d-flex justify-content-around" role="toolbar" aria-label="Toolbar with button groups">
          <div id="initbutt" class="btn-group" style="display: none;">
            <button type="button" class="btn btn-success btn-md" onclick="startgame()">Start</button>
          </div>

          <div id="gp1" class="btn-group" style="display: none;">
            <button id="gp1" type="button" class="btn btn-dark btn-md" onclick="exposeElements(this.id)">SA INCEPEM!</button>
          </div>

          <div id="gp2" class="btn-group" style="display: none;">
            <button id="gp2" type="button" class="btn btn-dark btn-md" onclick="exposeElements(this.id)">SA PETRECEM!</button>
          </div>

          <div id="gp3" class="btn-group" style="display: none;">
            <button id="gp3" type="button" class="btn btn-dark btn-md" onclick="exposeElements(this.id)">MERGEM LA MUNCA ECONOMISIM!</button>
          </div>

          <div id="exitbutt" class="btn-group" style="display: none;">
            <a href="#buttons">
              <button type="button" class="btn btn-success btn-md" onclick="exitfirstgame()">Exit</button>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div id="secondgame" class="container container-fluid border border-3 border-dark w-75 my-5" style="height: 80%; display: none;">
      <div class="d-flex align-items-center justify-content-center w-100 h-75 my-4">
        <h3 id="explainsecgame" style="padding: 10px; display: none;" class="card-body border border-3 border-dark"> The way a city is placed can influence his economy. You should position buildings as correct as possible.
        </h3>

        <div id="citypuzzle" class="bg-dark w-100 h-100" style="display: none;">
          <div id="tablepuzzle" class="col w-100 px-3 py-3" style="height: 70%;">
            <div class="row my-1">
              <div id="tablepuzzleelem" class="d-flex justify-content-center">
                <div id="div1" class="mx-1 d-flex align-items-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div2" class="mx-1 d-flex align-items-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div3" class="mx-1 d-flex align-items-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div4" class="mx-1 d-flex align-items-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div5" class="mx-1 d-flex align-items-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
              </div>
            </div>

            <div class="row my-1">
              <div id="tablepuzzleelem" class="d-flex justify-content-center">
                <div id="div6" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div7" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div8" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div9" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div10" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
              </div>
            </div>

            <div class="row my-1">
              <div id="tablepuzzleelem" class="d-flex justify-content-center">
                <div id="div11" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div12" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div13" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div14" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div15" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
              </div>
            </div>

            <div class="row my-1">
              <div id="tablepuzzleelem" class="d-flex justify-content-center">
                <div id="div16" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div17" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div18" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div19" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div20" class="mx-1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
              </div>
            </div>
          </div>

          <div id="itemspuzzle"class="col w-100 bg-danger px-2 py-2" style="height: 30%;">
            <div class="row my-1 w-100 h-50">
              <div id="tablepuzzlepieces1" class="d-flex justify-content-center w-100 h-100" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="dragschool" class="rounded mx-1" draggable="true" ondragstart="drag(event)"></div>
                <div id="draghospital" class="rounded mx-1" draggable="true" ondragstart="drag(event)"></div>
                <div id="dragmarket" class="rounded mx-1" draggable="true" ondragstart="drag(event)"></div>
                <div id="dragbank" class="rounded mx-1" draggable="true" ondragstart="drag(event)"></div>
                <div id="dragstadium" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="dragtownhall" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="dragaeroport" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag8" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag9" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag10" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
              </div>
            </div>

            <div class="row my-1 w-100 h-50">
              <div id="tablepuzzlepieces2" class="d-flex justify-content-center w-100 h-100" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="drag11" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag12" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag13" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag14" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag15" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag16" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag17" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag18" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag19" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
                <div id="drag20" class="bg-success mx-1" style="width: 55px; height: 55px;" draggable="true" ondragstart="drag(event)"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-toolbar d-flex justify-content-around mt-2" role="toolbar" aria-label="Toolbar with button groups">
          <div id="initbuttsecond" class="btn-group" style="display: none;">
            <button type="button" class="btn btn-success btn-md" onclick="startsecondgame()">Start</button>
          </div>

          <div id="finishbuttonsecond" class="btn-group" style="display: none;">
            <button id="finishbuttonsecond" type="button" class="btn btn-success btn-md" onclick="exitsecondgame(this.id)">Finish</button>
          </div>

          <div id="exitbuttsecgame" class="btn-group" style="display: none;">
            <a href="#buttons">
              <button type="button" class="btn btn-success btn-md" onclick="exitsecondgame(this.id)">Exit</button>
            </a>
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


  <script src="/JS/firstdemogame.js"></script>

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
