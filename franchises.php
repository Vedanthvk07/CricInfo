<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}

$sql_1="SELECT * FROM franchise";
$result1=mysqli_query($conn,$sql_1);
if(!$result1){
    echo" something went wrong";
    return;
}
$teams=mysqli_fetch_all($result1,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FRANCHISES | Cric</title>
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
            <li class="breadcrumb-item active" aria-current="page">
                Franchises
            </li>
        </ol>
    </nav>
    <div class="page-container">
        <h2>FRANCHISES</h2>
    <?php
        foreach ($teams as $team) {
            $team_images = glob("img/".$team['F_ID']."*");
        ?>
            <div class="team-card row">
                <div class="image-container col-md-4">
                <a href="franchise_players.php?id=<?=$team['F_ID']?>">
                    <img src="<?= $team_images[0] ?>" />
        </a>
                </div>
                <div class="content-container ">
                    <div class="detail-container">
                        <div class="name"><?php echo "TEAM:".$team['TEAM_NAME'] ;?></div>
                        <div class="captain"><?php echo "CAPTAIN:".$team['TEAM_CAPTAIN']; ?></div>
                    </div>
                </div> 
                </a>
            </div>
            <?php }?>
        </div>
       <?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
        
         
</body>
</html>