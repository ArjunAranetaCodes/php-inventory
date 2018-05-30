<?php
include 'db.inc.php';
session_start();

$id = $_GET["id"];

$sql = "UPDATE tbl_accounts SET status = 'Verified' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewaccounts.php");

?>
