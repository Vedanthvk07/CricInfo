<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}
$id=$_GET["id"];
$sql_1="SELECT * FROM player12 WHERE N_ID='$id'";
$sql_2="SELECT * FROM nat_team WHERE N_ID='$id'";
$sql_3="SELECT * FROM coach WHERE N_ID='$id'";
$result1=mysqli_query($conn,$sql_1);
if(!$result1){
    echo" something went wrong1";
    return;
}
$players=mysqli_fetch_all($result1,MYSQLI_ASSOC);

$result2=mysqli_query($conn,$sql_2);
if(!$result2){
    echo" something went wrong";
    return;
}
$team=mysqli_fetch_assoc($result2);
$result3=mysqli_query($conn,$sql_3);
if(!$result3){
    echo" something went wrong";
    return;
}
$coach=mysqli_fetch_assoc($result3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players | Cric</title>
<?php 
include "includes/header_links.php"
?>
<link href="css/index.css" rel="stylesheet"/>
<link href="css/teams.css" rel="stylesheet" />
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
                team_players
            </li>
        </ol>
    </nav>
    <div class="page-container">
    <div class="image-container">
       <img src="img/<?=$id?>.jpg">
    </div><hr>
    <h2><?php echo $team["NATION"];?></h2>
    <hr>
    <div class="data">
    <span class="col-md-3 divi"><?php echo "CAPTAIN:".$team['NAT_CAPTAIN'];?></span>
    <span class="col-md-3 divi"> <?php echo "MATCHES:".$team['MATCHESN'];?></span>
     <span class="col-md-3 divi"><?php  echo "WINS:".$team['WINS'];?></span>
     <hr>
</div>
      <?php
         $s=0;
        foreach ($players as $player) {
          #  $team_images = glob("img/".$team["N_ID"]."/".$s."*");
        ?>
            <div class="team-card row">
                
                <div class="image-container col-md-4">
                <a href="players.php?id=<?= $player['P_ID'] ?>">
                <img src="img/<?=$player['P_ID']?>.jpg">
                </a>
                </div>
                <div class="content-container ">
                    <div class="detail-container">
                        <div class="name"><?php echo "NAME:".$player['P_NAME'] ;?></div>
                        <div class="captain"><?php echo "COUNTRY:".$player['COUNTRY']; ?></div>
                    </div>
                </div>
               
            </div>
            <?php }?>
            <h2>COACH</h2>
            <div class="team-card row">
                
                <div class="image-container col-md-4">
                <a href="coaches.php?id=<?=$coach['C_NO']?>">
                    <img src="img/<?=$coach['C_NO']?>.jpg"/>
                </a>
                </div>
                <div class="content-container ">
                    <div class="detail-container">
                        <div class="name"><?php echo "NAME:".$coach['C_NAME'] ;?></div>
                        <div class="captain"><?php echo "COUNTRY:".$coach['COUNTRY']; ?></div>
                    </div>
                </div>
               
            </div>
  </div>
  </div>
    <?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
        
         
</body>
</html>