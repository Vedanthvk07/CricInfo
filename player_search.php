<?php
session_start();
require("includes/database_connect.php");

$name= $_POST['player'];

$sql1="SELECT * FROM player12 WHERE P_NAME='$name'";
$result = mysqli_query($conn, $sql1);
if (!$result) {
	exit;
}
$row = mysqli_fetch_assoc($result);
$id=$row['P_ID'];
$row_count = mysqli_num_rows($result);
if ($row_count!= 0) {
     header("location: players.php?id=$id");
}
else {
    exit;
}
mysqli_close($conn);
?>
