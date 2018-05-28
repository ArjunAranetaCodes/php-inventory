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
       <form id="form1" action="php/updatecart.php" method="post">

       <?php
       include 'php/db.inc.php';
       if(!$_SESSION["cartuser"] == null || !$_SESSION["cartuser"] == ""){
        $sql = "SELECT * FROM tbl_cart where username= '".$_SESSION["cartuser"].
        "' and modeofpay is not null ".
        " and status is null ".
        " and voucher = '".$_GET["voucher"]."' ORDER BY id DESC";
        $result = $conn->query($sql);
        $totalpay = 0;
        $shippping = 0;
        while($row = $result->fetch_assoc()){
         echo '<input type="hidden" name="voucher" value="'.$row["voucher"].'"/>';
         echo '<input type="hidden" name="item[]" value="'.$row["item_id"].'"/>';
         echo '<input type="hidden" name="quantity[]" value="'.$row["quantity"].'"/><br/>';
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

         $totalpay += $row2["prod_price"] * $row["quantity"];
         $shipping = $row["municipality"];
        }
        $str = explode(" - ", $shipping);
        $municipality = $str[0];
        $str2 = explode(" ", $str[1]);
        $money = $str2[1];
        echo '<tr>
         <td></td><td></td><td></td>
         <td>Shipping ('.$municipality.')</td>
         <td>Php '.$money.'.00</td>
         <td></td>
         <td></td>
         <td></td>
        </tr>';
        $totalpay += (int)$money;
        echo '<tr>
         <td></td><td></td><td></td>
         <td>Total</td>
         <td>Php '.$totalpay.'.00</td>
         <td></td>
         <td></td>
         <td></td>
        </tr>';
       }
       ?>
       </form>
      </tbody>
     </table>

     <div id="paypal-button"></div>
    </div>
   </div></div>
  </div>
  <!-- MainBody End ============================= -->
  <!-- Footer ================================================================== -->
  <?php include "footer.php";?>

  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script>
  				paypal.Button.render({

  								//env: 'production', // Optional: specify 'sandbox' environment
  								env: 'sandbox', // Optional: specify 'sandbox' environment
  												//sandbox:    'AWi18rxt26-hrueMoPZ0tpGEOJnNT4QkiMQst9pYgaQNAfS1FLFxkxQuiaqRBj1vV5PmgHX_jA_c1ncL',

  								client: {
  					//sandbox:    'Aen1MQTwbUjaAUy2eL0W-ORP9penLB00b_mS3LrQ4L1G-u4QrjJ6EfM_SAsckk6GnyEPn4IwX9-WTZJO'
  					sandbox:    'AUmdNE0PHNpjMmn-9G0CsV_W-LCAH0fulh8OlwSzOdoZIYwlZ4FegNrXM-rL-hKf2Pi7-0YDwQhlIKru'
  								},

  								payment: function() {

  												var env    = this.props.env;
  												var client = this.props.client;
  												var sum = <?php echo $totalpay;?>

  												return paypal.rest.payment.create(env, client, {
  																transactions: [
  																				{
  																								amount: { total: sum, currency: 'PHP' }
  																				}
  																]
  												});
  								},

  								commit: true, // Optional: show a 'Pay Now' button in the checkout flow

  								onAuthorize: function(data, actions) {

  												// Optional: display a confirmation page here

  												return actions.payment.execute().then(function() {
  																// Show a success page to the buyer
  																$("#form1").submit();
  																//alert("Payment has been sent!. Please wait for SMS Confirmation within 1-2 days.");
  																//window.location = "index.php";
  												});
  								}

  				}, '#paypal-button');
  </script>
 </body>
 </html>
