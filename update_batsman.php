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



$sql = "UPDATE batsman SET MATCHES='$dob',RUNS='$country',ST_RATE='$franchise',FIFTIES='$category',HUNDREDS='$n_id',BEST='$f_id' WHERE P_ID='$p_id'";
$result = mysqli_query($conn, $sql);
$err=mysqli_error($conn);
if (!$result) {
	echo $err;
	exit;
}
header("location: admin.php");
mysqli_close($conn);

?>