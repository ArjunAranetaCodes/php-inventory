<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$stockout = $_POST["current_stock"];

$sql = "UPDATE tbl_products SET current_stock = '".$stockout."' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewprodstocks.php");

?>
