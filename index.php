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
    <!--carousel-->
    <?php include "carousel.php";?>
    <?php include "alertbox.php";?>

    <div id="mainBody">
      <div class="container">
        <div class="row">
          <!-- Sidebar ================================================== -->
          <?php include "sidebar.php";?>
          <!-- Sidebar end=============================================== -->
          <div class="span9">
            <!--Featured Products-->
            <?php include "featured.php";?>
            <!--Products Body-->
            <?php $products->printAllProducts();?>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer ================================================================== -->
    <?php include "footer.php";?>
  </body>
</html>
