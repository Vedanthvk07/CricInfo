<?php
session_start();
require "includes/database_connect.php";
if (!isset($_SESSION['name'])) {
    header("location: index.php");
    die();
}

$id=$_SESSION['id'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN | CricInfo</title>
<?php 
include "includes/header_links.php"
?>
<link href="css/index.css" rel="stylesheet"/>
<link href="css/dashboard.css" rel="stylesheet"/>
<link href="css/admin.css" rel="stylesheet"/>
</head>

<body>
<div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="navbar-brand" href="index.html">
                <img src="img/R.png" />
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            
        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["name"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php" >
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["name"] ?>
                    </div>
                    
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        </nav>
    </div>
   
      
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Admin
            </li>
        </ol>
    </nav>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="6000">
            <img src="img/virat.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="img/kane.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/dhawan.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="page-container">
    <div class="my-profile page-container">
      <h1>My Profile: Admin</h1>
      <div class="row">
          <div class="col-md-3 profile-img-container">
              <i class="fas fa-user profile-img"></i>
          </div>
          <div class="col-md-9">
              <div class="row no-gutters justify-content-between align-items-end">
                  <div class="profile">
                      <div class="name"><?= $id ?></div>
                      <div class="email"><?= $name ?></div>
                      <div class="phone"><?= $email ?></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr>
  <h2>INSERT DATA</h2>
  <hr>
  <h4>Players</h4>
  <hr>
  <form class="form-inline" action="admin_player.php" method="post">
  <label for="p_id">P_id:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">Name:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="p_id">DOB:</label>
  <input type="date" id="DOB" placeholder="Enter player DOB" name="dob">
  <label for="name">Nation:</label>
  <input type="text" id="country" placeholder="Enter country" name="country">
  <label for="name">Franchise:</label>
  <input type="text" id="franchise" placeholder="Enter franchise" name="franchise">
    <label for="name">CAT:</label>
  <input type="text" id="category" placeholder="Enter category" name="category">
  <label for="n_id">N_ID:</label>
  <input type="text" id="n_id" placeholder="Enter team id" name="n_id">
  <label for="p_id">F_ID:</label>
  <input type="text" id="f_id" placeholder="Enter franchise id" name="f_id">
  <button type="submit">Submit</button>
</form>
<hr>
  <h4>Batsmen</h4>
  <hr>
  <form class="form-inline" action="admin_batsman.php" method="post">
  <label for="p_id">PLAYER ID:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">NAME:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="matches">MATCHES:</label>
  <input type="text" id="matches" placeholder="Enter matches" name="matches">
  <label for="name">RUNS:</label>
  <input type="text" id="runs" placeholder="Enter runs" name="runs">
 
    <label for="name">ST_RATE:</label>
  <input type="text" id="st_rate" placeholder="Enter strike rate" name="st_rate">
  <label for="fifties">FIFTIES:</label>
  <input type="text" id="fifties" placeholder="Enter fifties" name="fifties">
  <label for="hundreds">HUNDREDS:</label>
  <input type="text" id="hundreds" placeholder="Enter hundreds" name="hundreds">
  <label for="best">BEST:</label>
  <input type="text" id="best" placeholder="Enter best" name="best">
  <button type="submit">Submit</button>
</form>
<hr>
  <h4>Bowlers</h4>
  <hr>
  <form class="form-inline" action="admin_bowler.php" method="post">
  <label for="p_id">PLAYER ID:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">NAME:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="matches">MATCHES:</label>
  <input type="text" id="matches" placeholder="Enter matches" name="matches">
  <label for="wickets">WICKETS:</label>
  <input type="text" id="wickets" placeholder="Enter wickets" name="wickets">
  <label for="economy">ECONOMY:</label>
  <input type="text" id="economy" placeholder="Enter economy" name="economy">
    <label for="average">AVERAGE:</label>
  <input type="text" id="average" placeholder="Enter average" name="average">
  <label for="st_rate">STRIKE RATE:</label>
  <input type="text" id="st_rate" placeholder="Enter strike rate" name="st_rate">
  <label for="fig">BEST FIG:</label>
  <input type="text" id="fig" placeholder="Enter best figures" name="fig">
  <label for="5wh">5WH:</label>
  <input type="text" id="5wh" placeholder="Enter five wicket hauls" name="5wh">
  <button type="submit">Submit</button>
</form>
<hr>
<hr>
  <h2>UPDATE DATA</h2>
  <hr>
  <h4>Players</h4>
  <hr>
  <form class="form-inline" action="update_player.php" method="post">
  <label for="p_id">P_id:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">Name:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="name">Franchise:</label>
  <input type="text" id="franchise" placeholder="Enter franchise" name="franchise">
  <label for="p_id">F_ID:</label>
  <input type="text" id="f_id" placeholder="Enter franchise id" name="f_id">
  <button type="submit">Submit</button>
</form>
<hr>
  <h4>Batsmen</h4>
  <hr>
  <form class="form-inline" action="update_batsman.php" method="post">
  <label for="p_id">PLAYER ID:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">NAME:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="matches">MATCHES:</label>
  <input type="text" id="matches" placeholder="Enter matches" name="matches">
  <label for="name">RUNS:</label>
  <input type="text" id="runs" placeholder="Enter runs" name="runs">
  
    <label for="name">ST_RATE:</label>
  <input type="text" id="st_rate" placeholder="Enter strike rate" name="st_rate">
  <label for="fifties">FIFTIES:</label>
  <input type="text" id="fifties" placeholder="Enter fifties" name="fifties">
  <label for="hundreds">HUNDREDS:</label>
  <input type="text" id="hundreds" placeholder="Enter hundreds" name="hundreds">
  <label for="best">BEST:</label>
  <input type="text" id="best" placeholder="Enter hundreds" name="best">
  <button type="submit">Submit</button>
</form>
<hr>
  <h4>Bowlers</h4>
  <hr>
  <form class="form-inline" action="update_bowler.php" method="post">
  <label for="p_id">PLAYER ID:</label>
  <input type="text" id="p_id" placeholder="Enter player id" name="p_id">
  <label for="name">NAME:</label>
  <input type="text" id="name" placeholder="Enter name" name="name">
  <label for="matches">MATCHES:</label>
  <input type="text" id="matches" placeholder="Enter matches" name="matches">
  <label for="wickets">WICKETS:</label>
  <input type="text" id="wickets" placeholder="Enter wickets" name="wickets">
  <label for="economy">ECONOMY:</label>
  <input type="text" id="economy" placeholder="Enter economy" name="economy">
    <label for="average">AVERAGE:</label>
  <input type="text" id="average" placeholder="Enter average" name="average">
  <label for="st_rate">STRIKE RATE:</label>
  <input type="text" id="st_rate" placeholder="Enter strike rate" name="st_rate">
  <label for="fig">BEST FIG:</label>
  <input type="text" id="fig" placeholder="Enter best figures" name="fig">
  <label for="5wh">5WH:</label>
  <input type="text" id="5wh" placeholder="Enter five wicket hauls" name="5wh">
  <button type="submit">Submit</button>
</form>
<hr>
</div>
<?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
</body>
</html>