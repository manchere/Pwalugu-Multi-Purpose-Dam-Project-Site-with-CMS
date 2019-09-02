<?php
include 'dbConnect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pwalugu | VRA</title>
  <!--Title Bar Logo-->
  <link rel="icon" type="image/ico" href="img/Logos/damiconBlack.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
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
          <li class="nav-item active">
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


  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view"
          style="background-image: url('img/mapPwalugu.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeInLeft">
              <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-3">WELCOME TO THE PWALUGU MULTIPURPOSE DAM PROJECT</h1>
              </div>
              <a target="_blank" href="about.html" class="btn btn-outline-white btn-lg">
                read more
                <i class="fab fa-readme ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view"
          style="background-image: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0066.jpg'); background-repeat: no-repeat; background-size: cover;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <div class="col-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-3">INCREASING GHANA'S RENEWABLE ENERGY CAPACITY</h1>
              </div>

            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view"
          style="background-image: url('img/Pwalugu_pictures/PWALUGU/Bolga/IMG_9555.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <div class="white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-3">ENHANCING GHANA'S </br>CLIMATE CHANGE COMMITMENT</h1>
              </div>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->
        </div>
      </div>
      <!--/Third slide-->

      <!--Fourth slide-->
      <div class="carousel-item">
        <div class="view"
          style="background-image: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0131.jpg'); background-repeat: no-repeat; background-size: cover">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <div class="white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-3">ENJOY A VIRTUAL TOUR OF THE </br>PWALUGU MULTI-PURPOSE
                  DAM SITE
                </h1>
              </div>

              <a href="loginForm.php" class="btn btn-outline-white btn-lg">
                Tour Project Site
                <i class="fa fa-globe"></i>
              </a>
              <a href="pricingPage.php" class="btn btn-outline-white btn-lg">
                Purchase Voucher
                <i class="fa fa-credit-card"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>

      </div>
      <!--/Fourth slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon rgba-deep-strong spacing-arnd rounded-lg" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon rgba-deep-strong spacing-arnd rounded-lg" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
  <!--Main layout-->

  <main>
    <div class="container">
      <hr class="my-5">
      <!--Section: Landing page-->
      <section class="mt-5 wow fadeIn">
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6" style="background: url('img/Pwalugu_pictures/PWALUGU/pwaluguDam.png') no-repeat center center;
                  background-size: cover; opacity: 1; height:350px">

          </div>

          <!--Grid column-->
          <div class="col-md-6">

            <!-- Main heading -->
            <h4 class="header-text">What is PMPDP ?</h4>
            <p>Pwalugu Multi-Purpose Dam Project</p>
            <p>
              The Pwalugu Multi-Purpose Dam Project is a project that intends to fulfil the government’s 
              policy of providing electricity to the people of northern Ghana, it also aims at achieving 
              one of the key VRA objectives of 
              providing leadership in climate change to ensure development in a sustainable manner.
              
            </p>
            <hr>
            <!-- Main heading -->
            <a target="_blank" href="about.html" class="btn btn-indigo btn-md">Read More
              <i class="fab fa-readme ml-2 ml-1"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>
        <hr class="my-5">
        <!--Grid row-->
        <div class="row">
          <div class="col-md-6">
            <div class="description">
              <h4 class="header-text">About PMPDP</h4>
              <p>Project Background</p>
              <p>VRA has been involved in the Pwalugu Project since 1991 when it conducted a pre-feasibility study of some identified potential hydro sites;
                  In 2013,In 2013, VRA received funding from Agence Francaise de Development to undertake Feasibility Study...
              <hr>
              <a href="about.html"
                class="btn btn-indigo btn-md">Read More
                <i class="fab fa-readme ml-1"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6" style="background: url('img/Pwalugu_pictures/PWALUGU/Bolga/iMG_9555.jpg') no-repeat center center;
                              background-size: cover; opacity: 1; height:350px">
          </div>
        </div>

      </section>
      <!--Section: Landing page-->

      <hr class="my-5">
    </div>
  </main>

   
          <div class="card-body text-white bg-dark text-center">
            <div class="col-md-4 white-text text-center text-md-center wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.3s">
              <h1 class="h1-responsive font-weight-bold mt-sm-3"><strong>NEWS & UPDATES</strong></h1>
            </div>
          </div>
     

  <main>
    <div class="container">
      <!--Section: Magazine v.1-->
      <section class="wow fadeIn">

        <!--Grid row-->
        <div class="row text-left">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">
            <?php

            $query = "SELECT * FROM News ORDER BY News_Date DESC";
            $counter = 1;
            
            
            if($res = $con->query($query))
            {
              if($res->num_rows > 0)
              {
                while($row = $res->fetch_assoc())
                {
                  $validDate = date('d-m-Y',strtotime($row['News_Date']));
                  if($counter <= 3)
                  {
                    
                  ?>
                  <hr>
                  <!--Small news-->
                  <div class="row">
                    <div class="col-md-3">
      
                      <!--Image-->
                      <div class="view overlay rounded z-depth-1">
                        <img src="<?php echo $row['News_Image']; ?>" class="img-fluid"
                          alt="Minor sample post image">
                        <a href="newsPage.php?id=<?php echo $row['News_ID']; ?>">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                    </div>
      
                    <!--Excerpt-->
                    <div class="col-md-9">
                      <p class="dark-grey-text">
                        <strong class="text-primary"><i class="fas fa-calendar mr-2"></i><?php echo $validDate; ?></strong>
                      </p>
                      <a class="dark-grey-text" href="newsPage.php?id=<?php echo $row['News_ID']; ?>"><b><?php echo $row['News_title'] ?></b>
                        <i class="fas fa-angle-right float-right"></i>
                      </a>
                    </div>
      
                  </div>
                  <!--/Small news-->
                  <?php }
                  $counter++;
                  
                ?>
             </div>
             <div class="col-lg-6 col-md-12">
          <?php if($counter > 3 && $counter<=6 ){ ?>
          <!--Grid column-->
            <!--/Featured news-->
            <hr>
                   <!--Small news-->
                <div class="row">
                <div class="col-md-3">
      
      <!--Image-->
      <div class="view overlay rounded z-depth-1">
        <img src="<?php echo $row['News_Image']; ?>" class="img-fluid"
          alt="Minor sample post image">
        <a href="newsPage.php?id=<?php echo $row['News_ID']; ?>">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>

    <!--Excerpt-->
    <div class="col-md-9">
      <p class="dark-grey-text">
        <strong class="text-primary"><i class="fas fa-calendar mr-2"></i><?php echo $validDate; ?></strong>
      </p>
      <a class="dark-grey-text" href="newsPage.php?id=<?php echo $row['News_ID']; ?>"><b><?php echo $row['News_title'] ?></b>
        <i class="fas fa-angle-right float-right"></i>
      </a>
    </div>

                </div>
                <!--/Small news--> 
                     
          
          <!--Grid column-->
          <?php
                }
                }
            }
        }
                  ?>
        </div>
        <!--Grid row-->
      </section>
      <!--/Section: Magazine v.1-->
      <hr class="my-5">
    </div>
  </main>

  <!--second layout-->
  <section>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center" style="background: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0109.jpg') no-repeat center center fixed;
            background-size: cover; opacity: 1;">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div
            class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft rgba-deep-strong rounded spacing-arnd"
            data-wow-delay="0.3s">
            <h1 class="h1-responsive font-weight-bold mt-sm-3">Presentation Slides</h1>
            <hr class="hr-light">
            <h6 class="mb-4">Presentation slides on the Pwalugu Multipurpose Dam Project are available
              for download here.
            </h6>
            <a class="btn btn-blue" href="downloadcontent/~$Pwalugu Multipurpose Dam.pptx" download>PMPDP Presentation</a>
            <a class="btn btn-blue" href="downloadcontent/Irrigation Development Component of the Pwalugu Multipurpose Dam.pdf" download>PMPDP Presentation 2</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
            <img src="img/Logos/" alt="" class="img-fluid">
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
    </div>
  </section>

  <section class="bg-light py-5">
  <div class="card-body text-white bg-dark text-center">
            <div class="col-md-4 white-text text-center text-md-center wow fadeInLeft
              rgba-deep-strong rounded-sm spacing-arnd" data-wow-delay="0.35s">
              <h1 class="h1-responsive font-weight-bold mt-sm-3"><strong>LATEST EVENTS</strong></h1>
            </div>
          </div>
    <div class="container">
    <?php 
      
      $FILL = "SELECT * FROM Events ORDER BY Event_ID DESC LIMIT 1;";
      $result= $con->query($FILL);
    
      if($result->num_rows>0)
      {
          while($row = $result->fetch_assoc())
          {
            $eventDate = date("d-m-Y",strtotime($row['Event_startDate']));
          
            ?>
      <!--Section: Cards-->
      

      <?php
        
        ?>
      <hr>
      <!--Grid row-->
      
      <div class="row mt-3 wow fadeIn ">
        <!--Grid column-->
        <div class="col-lg-5 col-xl-4">
          <!--Featured image-->
          <div class="view overlay rounded border bg-dark"  style="height:220px">
            <a href="eventsPage.php?id=<?php echo $row['Event_ID']; ?>" target="_blank">
            <h1 class="text-center pt-5 pb-3"><strong class="text-"><i class="fa fa-calendar mr-2"></i><?php echo $eventDate; ?></strong></h1>
            <h3 class="text-center white"><?php echo $row['Event_category']?></h3>
              <div class="mask rgba-white-slight">
              </div>
            </a>
          </div>
        </div>
        
        <div class="col-lg-7 col-xl-7 ml-xl-4 mt-4">
           <!-- <p><strong class="dark-grey-text"><i class="fa fa-calendar mr-2"></i></strong></p> -->
            <h3 class="mb-3 font-weight-bold dark-text">
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
            <hr>
            <a href="eventsPage.php?id=<?php echo $row['Event_ID']; ?>" class="btn btn-primary">view event
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
          <hr>
    </div>
    
  </section>

  <main>
    <div class="container background: url('img/mapwalugu')">
      <hr class="my-5">
      <!--Section: Landing page-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

         <!--Section: Main features & Quick Start-->
<section>

  <!--Grid row-->
  <div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-lg-6 col-md-12 px-4">
    <h4 class="header-text mb-2">Project Status</h4>
      <!--First row-->
      <div class="row">
      
        <div class="col-1 mr-3">
          <i class="fas fa-check fa-2x indigo-text"></i>
        </div>
        <div class="col-10">
          <h5 class="feature-title"><a href="status.php">Status of RAP</a></h5>
          <p class="grey-text">
                  The RAP will begin in May and will take about six (6) months...
                  </p>
        </div>
      </div>
      <!--/First row-->
  
      <!--Third row-->
      <div class="row">
        <div class="col-1 mr-3">
          <i class="fas fa-check fa-2x indigo-text"></i>
        </div>
        <div class="col-10">
        <h5 class="feature-title"><a href="status.php#Esia">Status of ESIA</a></h5>
        <p class="grey-text">The ESIA is on-going and expected to be completed by the end of June for submission to the EPA.  The EPA will then organise stakeholder consultations before issuing a permit.
          </p>
        </div>
      </div>
      <!--/Third row-->
    </div>
    <!--/Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4" style="background: url('img/Pwalugu_pictures/PWALUGU/Accra/_MG_0124.jpg') no-repeat center center; 
            background-size: cover; opacity: 1;">

      <!-- <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p> -->
      
    </div>
    <!--/Grid column-->
  </div>
  <!--/Grid row-->
</section>
<!--Section: Main features & Quick Start-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Landing page-->

      <hr class="my-5">
    </div>
  </main>

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