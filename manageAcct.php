
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PMPDP | Dashboard</title>
  <link rel="icon" type="image/ico" href="img/Logos/damiconBlack.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet"> -->
  <!--personal styling-->


  <style>
    .sidebar-fixed {
      height: 100vh;
      width: 270px;
      -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      z-index: 1050;
      background-color: #fff;
      padding: 1.5rem;
      padding-top: 0;
    }

    .sidebar-fixed .list-group .active {
      -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      -webkit-border-radius: 5px;
      border-radius: 5px;
    }

    .sidebar-fixed .logo-wrapper {
      padding: 2.5rem;
    }

    .sidebar-fixed .logo-wrapper img {
      max-height: 50px;
    }

    @media (min-width: 1200px) {

      .navbar,
      .page-footer,
      main {
        padding-left: 270px;
      }
    }

    @media (max-width: 1199.98px) {
      .sidebar-fixed {
        display: none;
      }
    }


    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>

<body class="grey lighten-3">
  <!--connecting the database-->
<?php include 'dbConnect.php';?>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="http://www.vra.com" target="_blank">
          <strong class="blue-text">Administrator</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="eventsDashboard.php">Change Password
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">
                Track Usage</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
              <a class="nav-link rounded waves-effect text-success">
                <?php echo htmlspecialchars($_SESSION['user']);?>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.facebook.com" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://youtube.com" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link border border-light rounded waves-effect">
                <i class="fa fa-sign-out-alt"></i>Logout
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="img/Logos/AdamiconBlack.png" alt="Pwalugu">
      </a>

      <div class="list-group list-group-flush">
        
        <a href="newsDashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-newspaper mr-3"></i>News
        </a>
        <a href="eventsDashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Events/Programmes
        </a>
        <a href="pwaluguview.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-globe mr-3"></i>View Project Site
        </a>
        <a href="voucherDashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>View Purchase
        </a>
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-user mr-3"></i>Manage Account
        </a>
       
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" target="_blank"><?php print ''; ?></a>
            <span>|</span>
            <span>Account</span>
          </h4>
        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Card-->
          <form method="post" action="processNews.php">
            <div class="card">
              <!--Card content-->
              <div class="card-body">

                <div class="form-group">
                  <label for="oldpass">Old password</label>
                  <input type="password" class="form-control rounded-1" name="oldpass">

                  <label for="newpass">New password</label>
                  <input type="password" class="form-control rounded-1" name="newpass">

                  <label for="confnewpass">Confirm new password</label>
                  <input type="password" class="form-control rounded-1" name="confnewpass">

                  <input class="btn btn-primary rounded-1 mt-3" type="submit" value="validate" name="btnvalidate">
                
                  <?php $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    if(strpos($fullURL,"succ=1") == true)
                    {
                        echo'<span class="text-success">Password changed successfully</spanp><br>';
                    }
                    if(strpos($fullURL,"err=2") == true)
                    {
                        echo'<span class="text-danger">Passwords do not match, make sure new passwords match</span>';
                    }
                    if(strpos($fullURL,"err=1") == true)
                    {
                        echo'<span class="text-danger">New password cannot be the same as old password</span>';
                    }
                    if(strpos($fullURL,"err=0") == true)
                    {
                        echo'<span class="text-danger">Password update failed, please try again later</span>';
                    }
                    // if(strpos($fullURL,"fill=1") == true)
                    // {
                    //   echo '<span class="text-danger">Missing field required</span><br>';
                    // }
                    if(strpos($fullURL,"err=x0x") == true)
                    {
                      echo'<span class="text-danger">Old password is incorrect</span><br>';
                    }
                    if(strpos($fullURL,"oldErr=1") == true)
                    {
                      echo'<span class="text-danger">Please input old password</span><br>';
                    }
                    if(strpos($fullURL,"newErr=1") == true)
                    {
                      echo'<span class="text-danger">Please input new password</span><br>';
                    }
                    if(strpos($fullURL,"confnewErr=1") == true)
                    {
                      echo'<span class="text-danger">Please confirm new password</span><br>';
                    }
                    ?>
                  
                </div>

              </div>
            </div>
          </form>
          <!--/.Card-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              Pie chart
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="pieChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-4">

            <!--Card content-->
            <div class="card-body">

              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Sales
                  <span class="badge badge-success badge-pill pull-right">22%
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Traffic
                  <span class="badge badge-danger badge-pill pull-right">5%
                    <i class="fas fa-arrow-down ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Orders
                  <span class="badge badge-primary badge-pill pull-right">14</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Issues
                  <span class="badge badge-primary badge-pill pull-right">123</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Messages
                  <span class="badge badge-primary badge-pill pull-right">8</span>
                </a>
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
      <div class="card">

        <!--Card content-->
        <div class="card-body">

          <!-- Table  -->
          <table class="table table-hover">
            <!-- Table head -->
            <thead class="blue-grey lighten-4">
              <tr>
                <th>News ID</th>
                <th>Title</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              <?php
                  $FILL = "SELECT * FROM News";
                  $result = $con->query($FILL);

                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          ?>
                                        <tr>
                                            <th class="align-middle" scope="row"><?php echo $row['News_ID']; ?></th>
                                            <td class="align-middle"><?php echo $row['News_title']; ?></td>
                                            <td class="align-middle"><?php echo date("d-m-Y",strtotime($row['News_Date'])); ?></td>
                                            <!-- <td class="align-middle"><a href="processNews.php?id=<?php echo $row['News_ID']; ?>" class="btn btn-primary btn-sm rounded-1" name="<?php echo $row['News_ID'];?>">Delete News</a></td> -->
                                            <td class="align-middle"><a class="btn btn-primary btn-sm rounded-1" data-toggle="modal" data-target="#successDelete"
                                                  data-backdrop="false">Delete News</a>
                                            </td>
                                          </tr>
                                   
                                      <?php
                      }
                  }
              ?>
            </tbody>
            <!-- Table body -->
          </table>
          <!-- Table  -->
             <!-- Frame Modal Prompt Success-->
             <div class="modal fade bottom" id="successDelete" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-frame modal-bottom modal-notify modal-success" role="document">
                                          <!--Content-->
                                          <div class="modal-content">
                                            <!--Body-->
                                            <div class="modal-body">
                                              <div class="row d-flex justify-content-center align-items-center">

                                                <p class="pt-3 pr-2">Are you sure you want to delete this news?</p>

                                                <a role="button" class="btn btn-primary" href="processNews.php?Newsid=<?php echo $row['News_ID']; ?>">Yes
                                                  <i class="fa fa-check-circle"></i>
                                                </a>
                                                <a role="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No
                                                <i class="fa fa-cross-circle"></i>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                          <!--/.Content-->
                                        </div>
                                      </div>
                                      <!-- Frame Modal Prompt Success-->
             </div>
      </div>

  
      
  
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
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
  <!--ckeditor api-->
  <script src="js/ckeditor.js"></script>
  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });

    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
          label: "My First dataset",
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2,
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          data: [28, 48, 40, 19, 86, 27, 90]
        }
        ]
      },
      options: {
        responsive: true
      }
    });

    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
      type: 'radar',
      data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "My First dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        }, {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          backgroundColor: [
            'rgba(0, 250, 220, .2)',
          ],
          borderColor: [
            'rgba(0, 213, 132, .7)',
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive: true
      }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });

  </script>

  <!--ckeditor start-->
  <script>
    
    // ClassicEditor.create(document.getElementById('newsCont'));
  </script>


  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
      });
    }

    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
        "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
        "datasets": [{
          "label": "My First Dataset",
          "data": [22, 33, 55, 12, 86, 23, 14],
          "fill": false,
          "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
            "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
          ],
          "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
            "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
            "rgb(201, 203, 207)"
          ],
          "borderWidth": 1
        }]
      },
      "options": {
        "scales": {
          "xAxes": [{
            "ticks": {
              "beginAtZero": true
            }
          }]
        }
      }
    });

  </script>
</body>

</html>