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
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }

  </style>
</head>

<body>
  
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container-fluid">
    <img src="img/Logos/damicon.png" width="130px" alt="Pwalugu">
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">About</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="about.html">Project Background</a>
                <a class="dropdown-comp" href="pDescription.html">Project Description</a>
                <a class="dropdown-comp" href="pBenefiting.html">Project Benefits</a>
                <a class="dropdown-comp" href="pImpact.html">Project Impact</a>
                <a class="dropdown-comp" href="downloads.html">Downloads</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="drop">
              <a class="dropdown nav-link" data-toggle="dropdown" target="_blank">Events & Programmes</a>
              <div class="dropdown-content">
                <a class="dropdown-comp" href="events.php">Events</a>
                <a class="dropdown-comp" href="programme.php">Programmes</a>
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
            <a class="nav-link" href="stakeholderPage.html">Stakeholders</a>
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
              <i class="fa fa-globe mr-2"></i><small>TOUR PROJECT SITE</small>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
 
  <?php  

include 'dbConnect.php';


$SQL = "SELECT * FROM Programme ORDER BY Prog_date DESC LIMIT 4";
$result = $con->query($SQL);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $validDate = date('d-m-Y',strtotime($row['Prog_date']));
?>
  <div class="view" style="background: url('<?php echo $row['Prog_Image']; ?>') no-repeat center center fixed; background-repeat: no-repeat; background-size: cover;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn rgba-deep-strong spacing-arnd rounded-sm">
                <h1 class="h1-responsive font-weight-bold mt-sm-3"> 
                  <strong><?php echo $row['Prog_title']; ?></strong>
                </h1>
              </div>
              <!-- Content -->
            </div>
            <!--/Half image-->
  </div>  

    <div class="container">

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>
        <h3 class="h3 text-center mb-5"><?php echo $row['Prog_title']; ?></h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
              </div>
              <div class="col-10">
                <h5 class="feature-title"><?php echo $validDate; ?></h5>
                <p class="grey-text"><?php echo $row['Prog_time']?></p>
              </div>
            </div>
            <!--/First row-->


            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
              </div>
              <div class="col-10">
                <hr>
                <p class="grey-text"><?php echo $row['Prog_content']?>
                </p>
              </div>
            </div>
            <!--/Second row-->
          </div>
          <!--/Grid column-->

          <!--Image content-->
          <div class="col-md-6 mb-4" style="background: url('<?php echo $row['Prog_Image']; ?>') no-repeat center center; 
                  background-size: cover; opacity: 1;">
          </div>
          <!--/-->
        </div>
        <!--/Image content-->
      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

    </div>
  <?php 
    }
  }
  ?>
  <!--Main layout-->

   <!--Footer-->
<footer class="page-footer text-center font-small wow fadeIn">

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