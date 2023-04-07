<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}

$sql_1="SELECT * FROM nat_team";
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
    <title>TEAMS | Cric</title>
<?php 
include "includes/header_links.php"
?>

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
                Teams
            </li>
        </ol>
    </nav>
    <div class="page-container">
        <hr>
        <h2>TEAMS</H2>
        <hr>
    <?php
        foreach ($teams as $team) {
            $team_images = glob("img/".$team['N_ID']."*");
        ?>
            <div class="team-card row">
                <div class="image-container col-md-4">
                <a href="team_players.php?id=<?=$team['N_ID']?>">
                    <img src="<?= $team_images[0] ?>" />
        </a>
                </div>
                <div class="content-container ">
                    <div class="detail-container">
                        <div class="name"><?php echo "TEAM NAME:".$team['NATION'] ;?></div>
                        <div class="captain"><?php echo "CAPTAIN:".$team['NAT_CAPTAIN']; ?></div>
                    </div>
                </div> 
                
            </div>
            <?php }?>
        </div>
       <?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
        
         
</body>
</html>