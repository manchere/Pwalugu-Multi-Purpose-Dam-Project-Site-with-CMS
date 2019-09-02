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
  <?php
$cost = 0;
$product = "";
$desc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cost = 0;
    if (isset($_POST["btnQuickView"])) {
        $cost = 20;
        $product = "Quick View Voucher";
        $desc = '1 visits valid for 3 days';
    } else if (isset($_POST["btnEconomic"])) {
        $cost = 45;
        $product = "Economic Voucher";
        $desc = '3 visits valid for 2 weeks';
    } else if (isset($_POST["btnUnlimited"])) {
        $cost = 75;
        $product = "Unlimited Voucher";
        $desc = 'Unlimited visits valid for 2 months';
    }

}

?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container-fluid">
      <img src="img/Logos/AdamiconBlack.png" width="150px" alt="Pwalugu">

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Voucher Payment</h2>
          <p>Make safe and quick payments on our platform</p>
        </div>
        <form>
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
              <span class="price">GH₵  <?php echo $cost; ?></span>
              <p class="item-name"><?php echo $product; ?></p>
              <p class="item-description"><?php echo $desc; ?></p>
            </div>

            <div class="total">Total<span class="price">GH₵ <?php echo $cost; ?></span></div>
          </div>

          <div class="btn-group btn-group-toggle" data-toggle="buttons" aria-label="payment_method">
            <label class="btn btn-primary active">
              <input type="radio" name="options" class="btn btn-primary btn-block" onclick="">Visa Card</input>
            </label>
            <label class="btn btn-warning">
            <input type="radio" name="options" class="btn btn-warning btn-block">MTN Mobile Money</input>
            </label>
          </div>

          <div class="card-details">
            <h3 class="title">Visa Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <button type="button" class="btn btn-primary btn-block" formmethod="post">Proceed</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

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
