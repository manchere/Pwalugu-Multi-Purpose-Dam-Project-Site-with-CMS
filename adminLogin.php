<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: newsDashboard.php");
  exit;
}

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

    <main class="page payment-page bg-light">
      <section class="payment-form">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto text-white">
              <div class="block-heading" style="margin-bottom:10px">
                <i class="fas fa-user fa-2x"></i><h2 class="text-white">Admin Login</h2> 
              </div>
              <div>

                <form class="form-signin" method="post" action ="aLoginHandling.php">
                  <div class="products bg-light" style="padding-top:0px">
                    <div class="mb-3">
                      <img src="img/Logos/damiconBlack.png" width="120px" alt="Pwalugu">
                    </div>
                    <div class="form-label-group">
                      <input type="text" name="txtUser" class="form-control bg-light text-dark" placeholder="Username" autofocus>
                      <label for="txtUser"></label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" name="txtPass" class="form-control bg-light text-dark" placeholder="Password" >
                      <label for="txtPass"></label>
                    </div>
                      
                    <button type="submit" class="btn btn-primary btn-block" name="btnLogin" formmethod="post">LOGIN</button>
                    
                    <?php $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    if(strpos($fullURL,"userErr=1") == true)
                    {
                        echo'<small class="text-danger"> Please input a username</small>';
                    }
                    if(strpos($fullURL,"passErr=1") == true)
                    {
                        echo'<small class="text-danger"> Please input a password</small>';
                    }
                    if(strpos($fullURL,"wrong=1") == true)
                    {
                      echo '<small class="text-danger">Wrong username, please try again</small>';
                    }
                    if(strpos($fullURL,"wrong=2") == true)
                    {
                      echo '<small class="text-danger">Wrong password, please try again</small>';
                    }
                    ?>

                    <hr class="my-4">
                    <small class="text-dark">
                      © 2019 Copyright:
                      <a href="https://www.vra.com" target="_blank"><br> Volta River Authority. All Rights Reserved. </a>                
                    </small>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
</body>

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

</html>