<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}
$id=$_GET["id"];
$sql_1="SELECT * FROM player12 WHERE P_ID='$id'";
$sql_2="SELECT * FROM batsman WHERE P_ID='$id'";
$result1=mysqli_query($conn,$sql_1);
if(!$result1){
    echo" something went wrong1";
    return;
}
$players=mysqli_fetch_assoc($result1);
$flag=true;
$result2=mysqli_query($conn,$sql_2);
$row_count = mysqli_num_rows($result2);
if(!$row_count){
    $sql_3="SELECT * FROM bowler WHERE P_ID='$id'";
    $result3=mysqli_query($conn,$sql_3);
    $stat1=mysqli_fetch_assoc($result3);
    $flag=false;
}
else {
    $stat=mysqli_fetch_assoc($result2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Player Bio | Cric</title>
<?php 
include "includes/header_links.php"
?>
<link href="css/index.css" rel="stylesheet"/>
<link href="css/teams.css" rel="stylesheet" />
<link href="css/bio.css" rel="stylesheet"/>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="teams.php">Teams</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                player-bio
            </li>
        </ol>
    </nav>
    <div class="page-container">
    <div class="image-container">
       <img src="img/<?=$players['P_ID']?>.jpg">
    </div><hr>
       <h3><?php echo $players["P_NAME"];?></h3>
       <hr>
    <h2>Personal Information</h2>
    <hr>

<table class="bio">
  <tr>
    <th>Born</th>
    <th><?php echo $players["DOB"];?></th>
  </tr>
  <tr>
    <th>Country</th>
    <th><?php echo $players["COUNTRY"];?></th>
  </tr>
  <tr>
    <th>Franchise</th>
    <th><?php echo $players["FRANCHISE"];?></th>
  </tr>
  <tr>
    <th>Category</th>
    <th><?php echo $players['CATEGORY'];?></th>
  </tr>
</table>
<h2>Stats</h2>
<?php if($flag){?>
    <table class="bio">
    <tr>
    <th>Matches</th>
    <th><?php echo $stat['MATCHES'];?></th>
  </tr>
  <tr>
    <th>Runs</th>
    <th><?php echo $stat['RUNS'];?></th>
  </tr>
  <tr>
    <th>Average</th>
    <th><?php echo $stat['AVG'];?></th>
  </tr>
  <tr>
    <th>Strike rate</th>
    <th><?php echo $stat['ST_RATE'];?></th>
  </tr>
  <tr>
    <th>Fifties</th>
    <th><?php echo $stat['FIFTIES'];?></th>
  </tr>
  <tr>
    <th>Hundreds</th>
    <th><?php echo $stat['HUNDREDS'];?></th>
  </tr>
  <tr>
    <th>Best</th>
    <th><?php echo $stat['BEST'];?></th>
  </tr>
</table>
<?php } ?>
<?php if(!$flag){?>
    <table class="bio">
    <tr>
    <th>Matches</th>
    <th><?php echo $stat1['MATCHES1'];?></th>
  </tr>
  <tr>
    <th>Wickets</th>
    <th><?php echo $stat1['WICKETS'];?></th>
  </tr>
  <tr>
    <th>Economy</th>
    <th><?php echo $stat1['ECONOMY'];?></th>
  </tr>
  <tr>
    <th>Average</th>
    <th><?php echo $stat1['AVERAGE'];?></th>
  </tr>
  <tr>
    <th>Strike rate</th>
    <th><?php echo $stat1['ST_RATES'];?></th>
  </tr>
  <tr>
    <th>Best figures</th>
    <th><?php echo $stat1['BEST_FIG'];?></th>
  </tr>
  <tr>
    <th>Five wicket hauls</th>
    <th><?php echo $stat1['FIVE_WH'];?></th>
  </tr>
</table>
<?php } ?>
</div>
<?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
        
         
</body>
</html>







