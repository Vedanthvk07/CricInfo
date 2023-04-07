<?php
session_start();
require("includes/database_connect.php");

$p_id = $_POST['p_id'];
$name = $_POST['name'];
$franchise=$_POST['franchise'];
$f_id=$_POST['f_id'];



$sql = "UPDATE player12 SET FRANCHISE='$franchise',F_ID='$f_id' WHERE P_ID='$p_id'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}
header("location: admin.php");
mysqli_close($conn);

?>