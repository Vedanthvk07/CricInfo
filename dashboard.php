<?php
session_start();
require "includes/database_connect.php";

if (!isset($_SESSION["name"])) {
    header("location: index.php");
    die();
}
$name = $_SESSION["name"];

$sql_1 = "SELECT * FROM users WHERE u_name = '$name'";
$result_1 = mysqli_query($conn,$sql_1);
if (!$result_1) {
    echo "Something went wrong1!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong2!";
    return;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Cricinfo</title>

    <?php 
include "includes/header_links.php"
?>
    <link href="css/dashboard.css" rel="stylesheet"/>
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="navbar-brand" href="index.php">
                <img src="img/R.png" />
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <div class='nav-name'>
                       <?php
                       echo "Hi,".$name; 
                       ?>
                    </div>
                    <div class="nav-vl">
                        <li class="nav-item">
                             <i class="fas fa-sign-in-alt"></i>Logout
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>
        </ol>
    </nav>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="6000">
            <img src="img/d332016f-89e2-4d06-9b76-6eb0b5dda696.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="img/sanga.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/teams.jpg" class="d-block w-100" alt="...">
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
      <div class="my-profile page-container">
      <h1>My Profile</h1>
      <div class="row">
          <div class="col-md-3 profile-img-container">
              <i class="fas fa-user profile-img"></i>
          </div>
          <div class="col-md-9">
              <div class="row no-gutters justify-content-between align-items-end">
                  <div class="profile">
                      <div class="name"><?= $name ?></div>
                      <div class="email"><?= $user['email'] ?></div>
                      <div class="phone"><?= $user['Phone_no'] ?></div>
                  </div>
                 
              </div>
          </div>
      </div>
  </div>

    </div>
    <div class="footer">
        <div class="white">
            <h5>FOLLOW US ON</h5>
            <h6>-Instagram</h6>
            <h6>-Facebook</h6>
            <h6>-Twitter</h6>
        </div>
            <div class="footer-copyright">© 2022 Copyright CricInfo </div>
        </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>