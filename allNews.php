<?php include 'dbConnect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pwalugu | VRA</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
   <!--Title Bar Logo-->
  <link rel="icon" type="image/ico" href="img/Logos/damiconBlack.png">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <!-- Personal style -->
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
  </style>
</head>

<body>

 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container-fluid">
      <img src="img/Logos/pwaLogoWhite.png" width="150px" alt="Pwalugu">
      <a class="navbar-brand" target="_blank">
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">About</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="about.html#PBackground">Project Background</a>
                <a class="dropdown-comp" href="about.html#PDescription">Project Description</a>
                <a class="dropdown-comp" href="about.html#PBenefit">Project Benefits</a>
                <a class="dropdown-comp" href="about.html#Downloads">Downloads</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">Events</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="events.php">Ongoing Events</a>
                <a class="dropdown-comp" href="allNews.php">News</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">Programmes</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="programme.php">Programme 1</a>
                <a class="dropdown-comp" href="programme.php#programme2">Programme 2</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">Project Status</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="status.php">RAP</a>
                <a class="dropdown-comp" href="status.php#Esia">Esia</a>
                <a class="dropdown-comp" href="status.php#PDC">PDC</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactPage.php">Contact</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" class="nav-link" target="_blank">
              <i class="fab fa-youtube mr-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="loginForm.php" class="nav-link border border-light rounded" target="_blank">
              <i class="fa fa-globe mr-2"></i><small>VIEW PROJECT SITE</small>
            </a>
          </li>
        </ul>

      </div>

    </div>
</nav>
  <!-- Navbar -->

  <main class="mt-5 pt-5">
    <div class="container">
     
      
      <!--Section: Jumbotron-->
      <section class="card wow fadeIn" style="background-image: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0200.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Content -->
        <a href="eventsPage.html">
        <div class="card-body text-white text-center py-5 px-5 my-5">
            <div class="col-md-4 white-text text-center text-md-center mt-xl-5 mb-5 wow fadeInLeft 
            rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
              <h1 class="h1-responsive font-weight-bold mt-sm-3"><strong>NEWS</strong></h1>
            </div>
        </div>
      </a>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->
      

      <!--Section: Magazine v.1-->
      <section class="wow fadeIn">

        <!--Section heading-->
        <h3 class="h3 text-center my-4 font-weight-bold"><u>LATEST</u></h3>

        <!--Grid row-->
        <div class="row text-left">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <!--Image-->
            <a href="#">
            <div class="view img-fluid z-depth-1-half" style="background-image: url('img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9701.jpg');
            background-repeat: no-repeat; background-size: cover; height: 300px;">
           </div>
          </a>
            <!--Excerpt-->
            <div class="news-data my-3">
              <a href="" class="light-blue-text">
                <h6>
                  <i class="fas fa-address-card"></i>
                  <strong> Event</strong>
                </h6>
              </a>
              <p>
                <strong>
                  <i class="far fa-clock"></i> 20/08/2018</strong>
              </p>
            </div>
            <h3>
              <a>
                <strong>Meeting</strong>
              </a>
            </h3>
            <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
            </p>

            <!--/Featured news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9605.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>19/08/2018</strong>
                </p>
                <a>Lorem ipsum dolor sit amet
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9573.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>18/08/2018</strong>
                </p>
                <a>Soluta nobis est eligendi
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9540.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>17/08/2018</strong>
                </p>
                <a>Voluptatem accusantium doloremque
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <!--Image-->
            <a href="eventsPage.html">
            <div class="view img-fluid z-depth-1-half" style="background-image: url('img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9555.jpg');
             background-repeat: no-repeat; background-size: cover; height: 300px;">
            </div>
          </a>
            
            <!--Excerpt-->
            <div class="news-data my-3">
              <a href="" class="light-blue-text">
                <h6>
                  <i class="fas fa-plane"></i>
                  <strong> Travels</strong>
                </h6>
              </a>
              <p>
                <strong>
                  <i class="far fa-clock"></i> 20/08/2018</strong>
              </p>
            </div>
            <h3>
              <a>
                <strong>This is title of the news</strong>
              </a>
            </h3>
            <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
              placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
            </p>

            <!--/Featured news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9620.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>19/08/2018</strong>
                </p>
                <a>Lorem ipsum dolor sit amet
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Accra/_MG_0200.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>18/08/2018</strong>
                </p>
                <a>Soluta nobis est eligendi
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

            <hr>

            <!--Small news-->
            <div class="row">
              <div class="col-md-3">

                <!--Image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9701.jpg" class="img-fluid" alt="Minor sample post image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9">
                <p class="dark-grey-text">
                  <strong>17/08/2018</strong>
                </p>
                <a>Voluptatem accusantium doloremque
                  <i class="fas fa-angle-right float-right"></i>
                </a>
              </div>

            </div>
            <!--/Small news-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--/Section: Magazine v.1-->

    </div>
  </main>
  
   <!--Footer-->
  <footer class="page-footer text-center font-small wow fadeIn" style="margin-top:30px">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="http://www.vra.com" target="_blank" role="button">
        <!-- <i class="fas fa-download ml-2"></i> -->
        <img src="img/Logos/vraLogoFooter.png" width="100px" height="32px">
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>


      <a href="https://twitter.com" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://www.vra.com" target="_blank"> Volta River Authority. All Rights Reserved. </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();

    </script>
</body>

</html>