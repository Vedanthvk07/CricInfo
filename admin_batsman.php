<?php
session_start();
require("includes/database_connect.php");

$p_id = $_POST['p_id'];
$name = $_POST['name'];
$dob=$_POST['matches'];
$country = $_POST['runs'];
$franchise=$_POST['st_rate'];
$category=$_POST['fifties'];
$n_id=$_POST['hundreds'];
$f_id=$_POST['best'];



$sql1 = "INSERT INTO `batsman`(`P_ID`, `P_NAME`, `MATCHES`, `RUNS`, `ST_RATE`, `FIFTIES`, `HUNDREDS`, `BEST`) VALUES ('$p_id','$name','$dob','$country','$franchise','$category','$n_id','$f_id')";
$result = mysqli_query($conn, $sql1);
$err=mysqli_error($conn);
if (!$result) {
	echo $err;
	exit;
}
header("location: admin.php");
mysqli_close($conn);

?>