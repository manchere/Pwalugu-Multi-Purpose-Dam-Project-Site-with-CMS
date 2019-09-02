<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>News</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
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
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="nav-scroller py-1 mb-5 pb-4">
     
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
    </div>
    <?php  

include 'dbConnect.php';

$ID = $_GET['id'];
$SQL = "SELECT * FROM News WHERE News_ID = $ID;";
$result = $con->query($SQL);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $validDate = date('d-m-Y',strtotime($row['News_Date']));
?>
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background: url('<?php echo $row['News_Image']; ?>')  no-repeat center center fixed; 
    background-size: cover ">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?php echo $row['News_title']; ?></h1>
        
        <p class="lead mb-0"><a href="#readmore" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
    </div>
  </div>

  <main role="main" class="mt-5">
    <a name="readmore"></a>
    <div class="container">
     
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4
           font-italic border-bottom">
            <?php echo $row['News_title'];?>
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['News_sub']; ?></h2>

            <p class="blog-post-meta"><?php echo $validDate; ?><a href="#">&nbsp<?php echo $row['News_auth']; ?></a></p>

            <p><?php echo $row['News_desc']; ?></p>
            <hr>
            <?php echo $row['News_content']; ?>
            
            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->


        <aside class="col-md-4 blog-sidebar">
          <div class=" mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0"></p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Social Media</h4>
            <ol class="list-unstyled">
              <li><a href="www.facebook.com">Facebook</a></li>
              <li><a href="www.twitter.com">Twitter</a></li>
              <li><a href="www.youtube.com">Youtube</a></li>
            </ol>
          </div>
    </aside><!-- /.blog-sidebar -->

      </div>
     
    </div>
  </main><!-- /.container -->
  <?php 
        }
      }
        ?>
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="http://www.vra.com" target="_blank" role="button">
        <!-- <i class="fas fa-download ml-2"></i> -->
        <img src="img/Logos/damicon.png" width="130px" alt="Pwalugu">
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

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script> -->
  <!-- <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')
  </script> -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- <script src="js/vendor/holder.min.js"></script> -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>


  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none"
    style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
      <style type="text/css"></style>
    </defs><text x="0" y="13"
      style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text>
  </svg>
</body>

</html>