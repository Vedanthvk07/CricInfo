<?php
session_start();
require("includes/database_connect.php");

$p_id = $_POST['p_id'];
$name = $_POST['name'];
$dob=$_POST['matches'];
$country = $_POST['wickets'];
$franchise=$_POST['economy'];
$category=$_POST['average'];
$n_id=$_POST['st_rate'];
$f_id=$_POST['fig'];
$fig=$_POST['5wh'];



$sql1 = "INSERT INTO `bowler` (`P_ID`, `P_NAME`, `MATCHES1`, `WICKETS`, `ECONOMY`, `AVERAGE`, `ST_RATES`, `BEST_FIG`,`FIVE_WH`) VALUES ('$p_id','$name','$dob','$country','$franchise','$category','$n_id','$f_id','$fig')";
$result = mysqli_query($conn, $sql1);
$err=mysqli_error($conn);
if (!$result) {
	echo $err;
	exit;
}
header("location: admin.php");
mysqli_close($conn);

?>