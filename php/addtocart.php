<?php
include 'db.inc.php';
session_start();

if($_SESSION["cartuser"] != "" && $_SESSION["cartuser"] != null){
  $sql = "INSERT INTO tbl_cart (item_id, quantity, username) VALUES ('".
    $_GET["id"]."','".
    "1"."','".
    $_SESSION["cartuser"]."')";
  $result = $conn->query($sql);
  //$_SESSION["success"] = 1;
  $conn->close();
  header("Location:../product_summary.php");
}else{
  $_SESSION["error"] = 5;
  header("Location:../index.php");
}
?>
