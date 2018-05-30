<?php
include 'db.inc.php';
session_start();

$sql = "SELECT COUNT(*) FROM tbl_accounts where username = '".$_POST["username"]."'";
$result = $conn->query($sql);
$row = $result->fetch_array();

if($row[0]>0){
	$_SESSION["success"] = 3;
	//user already exists
	header("Location:../index.php");
}else{
	$sql = "INSERT INTO tbl_accounts (username, password, privilege) VALUES ('".
		$_POST["username"]."','".
		$_POST["password"]."','".
		$_POST["privilege"]."')";
	$result = $conn->query($sql);
	$_SESSION["success"] = 1;
	header("Location:../viewaccounts.php");
	$conn->close();
}


?>
