<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$category_name = $_POST["category_name"];

$sql = "UPDATE tbl_category SET category_name = '".$category_name."' ".
	" where id = ".$id;
$result = $conn->query($sql);
header("Location:../viewcategory.php");

?>