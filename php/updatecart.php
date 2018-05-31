<?php
 include "db.inc.php";
 $items = $_POST["item"];
 $quantity = $_POST["quantity"];
 $voucher = $_POST["voucher"];

 $count = count($items);

 for($x = 0; $x < $count; $x++){
  //echo $items[$x]." ".$quantity[$x]."<br/>";
  $sql = "SELECT * FROM tbl_products where id = ".$items[$x];
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $oldquant = $row["current_stock"];

  $newquantity = $oldquant - $quantity[$x];

  if($newquantity <= 0){
   $newquantity = 0;
  }

  $sql = "UPDATE tbl_products SET current_stock = '".$newquantity."' ".
  	" where id = ".$items[$x];
  $result = $conn->query($sql);
 }

 $sql = "UPDATE tbl_cart SET status = 'Approved' ".
  " where voucher = '".$voucher."'";
 $result = $conn->query($sql);

 echo '<script type="text/javascript">alert("Paypal complete!. Wait for Delivery Confirmation.");window.location="../index.php";</script>';
?>
