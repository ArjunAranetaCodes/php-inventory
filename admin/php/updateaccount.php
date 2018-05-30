<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$user = $_POST["username"];
$password = $_POST["password"];
$privilege = $_POST["privilege"];

$sql = "UPDATE tbl_accounts SET username = '".$user."' ,".
	" password = '".$password."', privilege = '".$privilege."'".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewaccounts.php");

?>
