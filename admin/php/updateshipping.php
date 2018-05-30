<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$place = $_POST["place"];
$fee = $_POST["fee"];

$sql = "UPDATE tbl_shipping SET place = '".$place."' ,".
	" fee = '".$fee."'".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewshipping.php");

?>
