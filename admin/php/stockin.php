<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$stockin = $_POST["stockin"];

$sql = "SELECT * FROM tbl_products where id = ".$id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$quantity = $row["current_stock"];

$newquantity = $quantity + $stockin;

$sql = "UPDATE tbl_products SET current_stock = '".$newquantity."' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewprodstocks.php");

?>
