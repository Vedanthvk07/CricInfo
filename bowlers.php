<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}

$sql_1="SELECT * FROM bowler order by wickets desc";
$result1=mysqli_query($conn,$sql_1);
if(!$result1){
    echo" something went wrong";
    return;
}
$players=mysqli_fetch_all($result1,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bowlers | Cric</title>
<?php 
include "includes/header_links.php"
?>
<link href="css/index.css" rel="stylesheet"/>
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
                Bowlers
            </li>
        </ol>
    </nav>
    <div class="page-container">
      <H2>BOWLERS</H2>
    <table border ="3" cellspacing="10" cellpadding="20">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Matches</th>
    <th>Wickets</th>
    <th>Economy</th>
    <th>Average</th>
    <th>Strike-rate</th>
    <th>5WH </th>
    <th>best </th>
  </tr>
<?php
#if (mysqli_num_rows($players) > 0) {
  $sn=1;
  foreach ($players as $player) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $player['P_NAME']; ?> </td>
   <td><?php echo $player['MATCHES1']; ?> </td>
   <td><?php echo $player['WICKETS']; ?> </td>
   <td><?php echo $player['ECONOMY']; ?> </td>
   <td><?php echo $player['AVERAGE']; ?> </td>
   <td><?php echo $player["ST_RATES"]; ?> </td>
   <td><?php echo $player["BEST_FIG"]; ?> </td>
   <td><?php echo $player["FIVE_WH"]; ?> </td>
  </tr>
 <?php
  $sn++;}?>
  
    </table>
  </div>
    <?php 
            include "includes/login-modal.php";
            include "includes/footer.php";
        ?>      
        
         
</body>
</html>