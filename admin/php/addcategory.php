<?php
include 'db.inc.php';
session_start();

$sql = "SELECT COUNT(*) FROM tbl_category where category_name = '".$_POST["category_name"]."'";
$result = $conn->query($sql);
$row = $result->fetch_array();

if($row[0]>0){	
	$_SESSION["success"] = 3;
	//data already exists
	header("Location:../index.php");
}else{
	$sql = "INSERT INTO tbl_category (category_name) VALUES ('".
		$_POST["category_name"]."')";
	$result = $conn->query($sql);
	$_SESSION["success"] = 1;
	header("Location:../viewcategory.php");
	$conn->close();	
}


?>