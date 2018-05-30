<?php
include 'db.inc.php';
session_start();

$id = $_GET["id"];

$sql = "UPDATE tbl_cart SET status = 'Disapproved' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../vieworders.php");

?>
