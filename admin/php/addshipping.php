<?php
include 'db.inc.php';
session_start();

$sql = "INSERT INTO tbl_shipping (place, fee) VALUES ('".
 $_POST["place"]."','".
	$_POST["fee"]."')";
$result = $conn->query($sql);
$_SESSION["success"] = 1;
header("Location:../viewshipping.php");
$conn->close();


?>
