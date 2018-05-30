<?php
include 'db.inc.php';
session_start();

$id = $_GET["id"];

$sql = "UPDATE tbl_products SET isfeatured = 'No' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewfeatured.php");

?>
