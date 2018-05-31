<?php
include "userfunctions.php";
include "cartfunctions.php";
$cart = new cartfunctions();

if($_GET){
 if($_GET["action"] == "delete"){
  $id = $_GET["id"];
  $cart->deleteById($id, "tbl_cart");
  header("Location:../product_summary.php");
 }

 if($_GET["action"] == "minus"){
  $id = $_GET["id"];
  $cart->minusCart($id);
  header("Location:../product_summary.php");
 }

 if($_GET["action"] == "add"){
  $id = $_GET["id"];
  $cart->addCart($id);
  header("Location:../product_summary.php");
 }
}
?>
