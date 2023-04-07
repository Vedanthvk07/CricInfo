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



$sql = "UPDATE bowler SET MATCHES1='$dob',WICKETS='$country',ECONOMY='$franchise',AVERAGE='$category',ST_RATES='$n_id',FIVE_WH='$f_id',BEST_FIG='$fig' WHERE P_ID='$p_id'";
$result = mysqli_query($conn, $sql);
$err=mysqli_error($conn);
if (!$result) {
	echo $err;
	exit;
}
header("location: admin.php");
mysqli_close($conn);

?>