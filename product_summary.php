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
    <div class="span9">
     <ul class="breadcrumb">
      <li><a href="index.php">Home</a> <span class="divider">/</span></li>
      <li class="active"> SHOPPING CART</li>
     </ul>
     <h3>  SHOPPING CART [ <small><?php echo $cart->getCartCount();?> Item(s) </small>]
      <a href="products.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
      <hr class="soft"/>

      <?php $cart->getCartByUser();?>

      <table class="table table-bordered">
       <tbody>
        <tr>
         <td>
          <form class="form-horizontal" action="php/confirmorder.php" method="post">
           <div class="control-group">
            <label class="control-label"><strong> Municipality </strong> </label>
            <div class="controls">
             <select class="input" name="municipality" id="municipality">
               <?php $cart->getMunicipalities();?>
             </select>
            </div>
           </div>
            <div class="control-group">
             <label class="control-label"><strong> Address </strong> </label>
             <div class="controls">
              <textarea name="address" class="input" rows="8" cols="80"></textarea>
             </div>
            </div>
           <div class="control-group">
            <label class="control-label"><strong> MODE OF PAYMENT </strong> </label>
            <div class="controls">
             <select class="input" name="modeofpay" id="modeofpay">
              <option>Cash on Delivery</option>
              <option>Paypal</option>
             </select>
            </div>
           </div>
           <!--
           <div class="control-group">
            <label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
            <div class="controls">
             <input type="text" class="input-medium" placeholder="CODE">
             <button type="submit" class="btn"> ADD </button>
            </div>
           </div>
           -->

           <input type="submit" class="btn btn-large btn-primary pull-right" id="confirm" value='Confim Order'>
           <!--<input type="button" class="btn btn-large btn-warning pull-right" id="paypal" style="display:none;" value='Paypal Payment'>-->
          </form>
         </td>
        </tr>
       </tbody>
      </table>

      <!--
      <table class="table table-bordered">
       <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
       <tr>
        <td>
         <form class="form-horizontal">
          <div class="control-group">
           <label class="control-label" for="provinces">Provinces </label>
           <div class="controls">
            <select class="" name="provinces" id ="provinces">
             <?php
             $provinces = $cart->getProvinces();

             foreach ($provinces as $key => $value) {
              echo '<option>'.$value.'</option>';
             }
             ?>
             <option></option>
            </select>
           </div>
          </div>

          <div class="control-group">
           <label class="control-label" for="municipalities">Municipalities </label>
           <div class="controls">
            <select class="" name="municipalities" id ="municipalities">
             <option></option>
            </select>
           </div>
          </div>

          <div class="control-group">
           <label class="control-label" for="municipalities">Address </label>
           <div class="controls">
            <textarea name="address" rows="8" cols="80"></textarea>
           </div>
          </div>

          <div class="control-group">
           <label class="control-label" for="municipalities">Contact Number </label>
           <div class="controls">
            <input type="text" name="contactnum" value="">
           </div>
          </div>

          <div class="control-group">
           <label class="control-label" for="municipalities">Total Shipping </label>
           <div class="controls">
            <input type="text" name="shipping" value="" readonly>
           </div>
          </div>

          <div class="control-group">
           <div class="controls">
            <button type="" class="btn" id="btnEstimate">ESTIMATE </button>
           </div>
          </div>
         </form>
        </td>
       </tr>
      </table>
      -->
      <a href="products.php" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>

      <br><br>

     </div>
    </div>
   </div>
   </div>
   <!-- MainBody End ============================= -->
   <!-- Footer ================================================================== -->
   <?php include "footer.php";?>
   <script type="text/javascript">
   $('#provinces').on('change',function(e){
    //alert($("#drpProvince").val());
    loadcombos();
   });
   /*
   $('#modeofpay').on('change',function(e){
    //alert($("#drpProvince").val());
    //loadcombos();
    //alert($("#modeofpay").val());
    if($("#modeofpay").val() == "Paypal"){
     $("#paypal").show();
     $("#confirm").hide();
    }else{
     $("#paypal").hide();
     $("#confirm").show();
    }
   });*/

   function loadcombos(){
    $.ajax({
     type: "GET",
     url: 'php/Municipalities.php',
     data: "province=" + $("#provinces").val(),
     success: function(data) {
      $('#municipalities').html(data);
     }
    });
   }

   $(document).ready(function(){
    loadcombos();
   });
   $("#municipality").on('change',function(){
    var subtotal = $("#subtotal").text();
    var str2 = subtotal.split(" ");
    str2[2] = str2[2].replace(",", "");
    var money1 = str2[2].replace(".00", "");

    var shipping = $("#municipality").val();
    var str = shipping.split(" - ");
    var money = str[1].split(" ");
    var money2 = money[1];

    var total = parseInt(money1) + parseInt(money2);
    $("#totallabel").text("TOTAL + Shipping (Php " + money1 + ".00 + Php " + money2 + ".00 )");
    $("#totalprice").text("Php " + total + ".00");
   });

   </script>
  </body>
  </html>
