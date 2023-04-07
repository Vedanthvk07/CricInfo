<?php
session_start();
require("includes/database_connect.php");

$p_id = $_POST['p_id'];
$name = $_POST['name'];
$dob=$_POST['dob'];
$country = $_POST['country'];
$franchise=$_POST['franchise'];
$category=$_POST['category'];
$n_id=$_POST['n_id'];
$f_id=$_POST['f_id'];



$sql = "INSERT INTO `player12` (`P_ID`, `P_NAME`, `DOB`, `COUNTRY`, `FRANCHISE`, `CATEGORY`, `N_ID`, `F_ID`) VALUES ('$p_id','$name','$dob','$country','$franchise','$category','$n_id','$f_id')";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}
header("location:admin.php");
mysqli_close($conn);

?>