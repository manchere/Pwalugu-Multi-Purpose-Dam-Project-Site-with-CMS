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
<!-- <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading"> -->
    <main class="page payment-page">
      <section class="payment-form dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
              <div class="block-heading" style="margin-bottom:10px">
                  <h2>Login</h2>
                  <p>Enter details to tour project site</p>
              </div>
              <div>

                  <form class="form-signin" method="post" action ="vLoginHandling.php">
                  <div class="products" style="padding-top:0px">
                    <div class="mb-3">
                    <img src="img/Logos/pdamiconBlack.png" width="120px" alt="Pwalugu">
                    </div>
                    <div class="form-label-group">
                      <input type="text" name="txtSerial" class="form-control text-dark" placeholder="Serial Number" autofocus>
                      <br>
                    </div>

                    <div class="form-label-group">
                      <input type="password" name="txtPin" class="form-control text-dark" placeholder="PIN">
                      
                    </div>
                    
                    
                    <?php $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;
                    
                    if(strpos($fullURL,"serialErr=1") == true)
                    {
                        echo'<small class="text-danger"> Please input a serial number</small>';
                    }
                    if(strpos($fullURL,"PINErr=1") == true)
                    {
                        echo'<small class="text-danger"> Please input a PIN</small>';
                    }
                    if(strpos($fullURL,"credentials=1") == true)
                    {
                        echo'<small class="text-danger">Incorrect credentials please try again</small>';
                    }
                    if(strpos($fullURL,"expired=1") == true)
                    {
                      echo'<small class="text-danger">Your voucher has expired, please purchase another one</small>';
                    }
                    if(strpos($fullURL,"wrong=1") == true)
                    {
                      echo'<small class="text-danger">Wrong credentials, please try again</small>';
                    }
                    if(strpos($fullURL,"failure=1") == true)
                    {
                      echo '<small class="text-danger">Error login failed.</small>';
                    }
                    if(strpos($fullURL,"exceed=1") == true)
                    {
                      echo '<small class="text-danger">You have exceeded the maximum number of visits, please purchase a new voucher.</small>';
                    }
                    ?>
                    <br>
                    <br>

                   
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" name="rdRememberPIN">
                      <label class="custom-control-label" for="rdRememberPIN">Remember PIN</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btnSignin" formmethod="post">SIGN IN</button>
                    <div class="my-1">
                      <a class="btn btn-primary btn-block" href="index.php" value="">return to
                        homepage</a>
                    </div>
                    <hr class="my-4">
                    <div class="text-right">
                      <a href="pricingPage.php">Purchase Voucher</a>
                    </div>
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