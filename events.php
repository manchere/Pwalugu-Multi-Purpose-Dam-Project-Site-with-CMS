<!DOCTYPE html>
<html lang="en">
<?php include 'dbConnect.php'; ?>

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
  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">
    <section class="wow fadeIn">
        <div
          style="background-image: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0066.jpg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Content -->
          <a href="#">
            <div class="card-body text-white text-center py-5 px-5 my-5">
              <div class="col-md-4 white-text text-center text-md-center mt-xl-5 mb-5 wow fadeInLeft
                      rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-3"><strong>EVENTS</strong></h1>
              </div>
            </div>
          </a>
          <!-- Content -->
        </div>
       
      </section>
      <?php 
      
      $FILL = "SELECT * FROM Events ORDER BY Event_startDate DESC LIMIT 6;";
      $result= $con->query($FILL);
      $counter = 1;
      if($result->num_rows>0)
      {
          while($row = $result->fetch_assoc())
          {
            $validDate = date("d-m-Y",strtotime($row['Event_startDate']));
          
            ?>
      <!--Section: Cards-->
      

      <?php
        
        ?>
      <hr>
      <!--Grid row-->
      
      <div class="row mt-3 wow fadeIn cloudy-knoxville-gradient">
        <!--Grid column-->
        <div class="col-lg-5 col-xl-4">
          <!--Featured image-->
          <div class="view overlay rounded bg-dark border"  style="height:220px">
            <a href="eventsPage.php?id=<?php echo $row['Event_ID']; ?>" target="_blank">
            <h1 class="text-center pt-5 pb-3"><strong class="text-"><i class="fa fa-calendar mr-2"></i><?php echo $validDate; ?></strong></h1>
            <h3 class="text-center white"><?php echo $row['Event_category']?></h3>
              
            </a>
          </div>
        </div>
        <!--Grid column
            img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9527.jpg-->
        <!--Grid column-->
        <div class="col-lg-7 col-xl-7 ml-xl-4 mt-4">
           <!-- <p><strong class="dark-grey-text"><i class="fa fa-calendar mr-2"></i></strong></p> -->
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong><?php echo $row['Event_title']; ?></strong>
            </h3>
            <table>
              <tr>
                <td style="text-align:right"><span class="font-weight-bold">Location:</span></td>
                <td><span class="dark-grey-text pb-2">&nbsp<?php echo $row['Event_location']; ?></span><br></td>
              </tr>
              <tr>
                <td style="text-align:right"><span class="font-weight-bold">Time:</span></td>
                <td><span class="dark-grey-text">&nbsp<?php echo $row['Event_time']; ?></span></td>
              </tr>
            </table>
            <a href="
            eventsPage.php?id=<?php echo $row['Event_ID']; ?>" class="btn btn-primary">view event
              <i class="fas fa-play ml-2"></i>
            </a>
          </div>
          <!--Grid column-->
        </div>

        <?php
            }
          }
          $con->close();
            ?>

        <!--Grid row-->
        <hr class="mb-5">
        <!--Grid row-->
        <!-- <div class="row mt-3 wow fadeIn">-->


     </div>
  </main>
  <!--Main layout-->


  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

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