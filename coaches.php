<?php
session_start();
require "includes/database_connect.php";
#if (!isset($_SESSION["name"])) {
 #   header("location: index.php");
  #  die();
#}
$id=$_GET["id"];
$sql_1="SELECT * FROM coach WHERE C_NO='$id'";

$result1=mysqli_query($conn,$sql_1);
if(!$result1){
    echo" something went wrong1";
    return;
}
$coach=mysqli_fetch_assoc($result1);
$N_id=$coach['N_ID'];
$f_id=$coach['T_ID'];
$sql2="SELECT * FROM nat_team where N_ID='$N_id'";
$f=null;
$t=null;
$result2=mysqli_query($conn,$sql2);
$n=mysqli_num_rows($result2);
if($n){
    $team=mysqli_fetch_assoc($result2);
    $t=$team['NATION'];
}
$sql3="SELECT * FROM franchise where F_ID='$f_id'";
$result3=mysqli_query($conn,$sql3);
$m=mysqli_num_rows($result3);
if($m){
    $franc=mysqli_fetch_assoc($result3);
    $f=$franc['TEAM_NAME'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coach Bio | Cric</title>
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
                coach-bio
            </li>
        </ol>
    </nav>
    <div class="page-container">
    <div class="image-container">
       <img src="img/<?=$coach["C_NO"]?>.jpg">
    </div><hr>
       <h3><?php echo $coach["C_NAME"];?></h3>
       <hr>
    <h2> Coach Information</h2>
    <hr>

<table class="bio">
  <tr>
    <th>AGE</th>
    <th><?php echo $coach["AGE"];?></th>
  </tr>
  <tr>
    <th>COUNTRY</th>
    <th><?php echo $coach["COUNTRY"];?></th>
  </tr>
  <tr>
    <th>ACHIEVEMENTS</th>
    <th><?php echo $coach["ACHIEVEMENTS"];?></th>
  </tr>
  <tr>
    <th>CURRENTLY COACHING</th>
    <th><?php echo $t.", ".$f;?></th>
  </tr>
</table>