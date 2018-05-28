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
      <li><a href="products.php">Products</a> <span class="divider">/</span></li>
      <li class="active">Product Details</li>
     </ul>
     <?php
     include "php/db.inc.php";
     $id = "";
     $prod_name = ""; $prod_category = ""; $prod_price = "";
     $prod_brand = ""; $prod_model = ""; $prod_release = "";
     $prod_dimension = ""; $prod_displaysize = ""; $prod_description = "";
     $prod_image = ""; $editorial_review = "";
     if($_GET){
      $id = $_GET["id"];
      $row = $products->getProductsByID($id);
      $prod_name = $row["prod_name"];
      $prod_category = $row["prod_category"];
      $prod_price = $row["prod_price"];
      $prod_brand = $row["prod_brand"];
      $prod_model = $row["prod_model"];
      $prod_release = $row["prod_release"];
      $prod_dimension = $row["prod_dimension"];
      $prod_displaysize = $row["prod_displaysize"];
      $prod_description = $row["prod_description"];
      $prod_image = $row["prod_image"];
      $current_stock = $row["current_stock"];
      $editorial_review = $row["editorial_review"];
     }
     ?>
     <div class="row">
      <div id="gallery" class="span3">
       <a href="admin/php/<?php echo $prod_image;?>" title="<?php echo $prod_name;?>">
        <img src="admin/php/<?php echo $prod_image;?>" style="width:100%" alt="<?php echo $prod_name;?>"/>
       </a>
       <div id="differentview" class="moreOptopm carousel slide">
        <div class="carousel-inner">
         <div class="item active">
          <a href="admin/php/<?php echo $prod_image;?>"> <img style="width:29%" src="admin/php/<?php echo $prod_image;?>" alt=""/></a>
          <!--
          <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
          <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
         -->
        </div>
        <div class="item">
         <a href="admin/php/<?php echo $prod_image;?>" > <img style="width:29%" src="admin/php/<?php echo $prod_image;?>" alt=""/></a>
         <!--
         <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
         <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
        -->
       </div>
      </div>
     </div>

    </div>
    <div class="span6">
     <h3><?php echo $prod_name;?> </h3>
     <h5>- <?php echo $prod_brand;?></h5>
     <h5>-
      <?php
       if($current_stock == null || $current_stock == ""){
        $current_stock = 0;
       }
       echo $current_stock;

      ?>
      in stock</h5>
     <hr class="soft"/>
     <form class="form-horizontal qtyFrm" method="get" action="php/addtocart.php">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <div class="control-group span6">
       <label class="control-label span1"><span>Php <?php echo number_format($prod_price, 2);?></span></label>
       <div class="controls ">
        <!--<input type="number" class="span2" placeholder="Qty." name="quantity"/>-->
        <button type="submit" class="btn btn-large btn-primary pull-right span2"> Add to cart
         <i class=" icon-shopping-cart"></i>
        </button>
       </div>
      </div>
     </form>

     <hr class="soft"/>
     <h4></h4>
     <!--
     <form class="form-horizontal qtyFrm pull-right">
     <div class="control-group">
     <label class="control-label"><span>Color</span></label>
     <div class="controls">
     <select class="span2">
     <option>Black</option>
     <option>Red</option>
     <option>Blue</option>
     <option>Brown</option>
    </select>
   </div>
  </div>
 </form>
 <hr class="soft clr"/>
-->
<p
<?php echo $prod_description;?>
</p>
<!--<a class="btn btn-small pull-right" href="#detail">More Details</a>-->
<br class="clr"/>
<a href="#" name="detail"></a>
<hr class="soft"/>
</div>

<div class="span9">
 <ul id="productDetail" class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
  <li><a href="#profile" data-toggle="tab">Related Products</a></li>
 </ul>
 <div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
   <h4>Product Information</h4>
   <table class="table table-bordered">
    <tbody>
     <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
     <tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?php echo $prod_brand;?></td></tr>
     <tr class="techSpecRow"><td class="techSpecTD1">Model: </td><td class="techSpecTD2"><?php echo $prod_model;?></td></tr>
     <tr class="techSpecRow"><td class="techSpecTD1">Released on: </td><td class="techSpecTD2"><?php echo $prod_release;?></td></tr>
     <tr class="techSpecRow"><td class="techSpecTD1">Dimensions: </td><td class="techSpecTD2"><?php echo $prod_dimension;?></td></tr>
     <tr class="techSpecRow"><td class="techSpecTD1">Display size: </td><td class="techSpecTD2"><?php echo $prod_displaysize;?></td></tr>
    </tbody>
   </table>

   <h5>Features</h5>
   <p>
    <?php echo $prod_description;?>
   </p>

   <h4>Editorial Reviews</h4>
   <p>
    <?php echo $editorial_review;?>
   </p>
  </div>

 </div>
</div>

</div>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include "footer.php";?>
</body>
</html>
