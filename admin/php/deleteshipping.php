<?php
include 'db.inc.php';
$filename = explode("/",$_SERVER['PHP_SELF']);
$curr_dir = "/".$filename[1]."/";
session_start();

$sql = "DELETE FROM tbl_shipping where id = '".$_GET["id"]."'";
$result = $conn->query($sql);

header("Location:".$curr_dir."admin/viewshipping.php");

?>
