<?php
session_start();
include "php/userfunctions.php";
include "php/productfunctions.php";
include "php/cartfunctions.php";

$products = new productfunctions(); //for product methods
$cart = new cartfunctions(); //for product methods
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "header.php";?>
</head>
<body>
 <?php include "topnav.php";?>
 <!-- Header End====================================================================== -->
 <div id="mainBody">
  <div class="container">
   <div class="row">
    <!-- Sidebar ================================================== -->
    <?php include "sidebar.php";?>
    <!-- Sidebar end=============================================== -->
    <div class="span9" id="mainCol">
     <h3> Delivery Details</h3>
     <hr class="soft"/>
     <h2 class="" style="text-align:center;">Your Orders</h2>
     <table id="datatable1" class="table table-bordered table-striped">
      <thead>
       <tr>
        <th>Voucher</th>
        <th>Order by</th>
        <th>Quantity</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Mode of Payment</th>
        <th>Status</th>
        <th>Order Date</th>
       </tr>
      </thead>
      <tbody>
       <?php
       include 'php/db.inc.php';
       if(!$_SESSION["cartuser"] == null || !$_SESSION["cartuser"] == ""){
        $sql = "SELECT * FROM tbl_cart where username= '".$_SESSION["cartuser"]."' and modeofpay is not null ORDER BY id DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
         echo '
         <tr>
         <td>'.$row["voucher"].'</td>
         <td>'.$row["username"].'</td>
         <td>'.$row["quantity"].'</td>';

         $sql = "SELECT * FROM tbl_products where id = ".$row["item_id"];
         $result2 = $conn->query($sql);
         $row2 = $result2->fetch_assoc();

         echo '<td>'.$row2["prod_name"].'</td>';
         echo '<td>Php '.number_format($row2["prod_price"], 2).'</td>';
         echo '<td>'.$row["modeofpay"].'</td>';
         if($row["status"] == "" || $row["status"] == null){
          echo '<td>Pending</td>';
         }else{
          echo '<td>'.$row["status"].'</td>';
         }
         echo '<td>'.$row["timestamp"].'</td>';
         echo'</tr>';
        }
       }
       ?>
      </tbody>
     </table>
    </div>
   </div></div>
  </div>
  <!-- MainBody End ============================= -->
  <!-- Footer ================================================================== -->
  <?php include "footer.php";?>
 </body>
 </html>
