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
		<li class="active">Products</li>
    </ul>
	<h3> Products Catalog <small class="pull-right">
      <?php echo $products->getProductsCount();?> products are available </small>
  </h3>
	<hr class="soft"/>

	<p>
		Be updated with the latest products here. Come and search the best
    products from our catalog
	</p>
	<hr class="soft"/>
  <!--
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
  -->

<!--
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
-->

<br class="clr"/>
<hr class="soft"/>
<div class="tab-content">
  <?php
    if($_GET){
      $txtSearch = $_GET["txtSearch"];
      $category = $_GET["category"];
      $products->printAllProductsListViewSearch($txtSearch, $category);
      ///$products->printAllProductsBlockViewSearch($txtSearch, $category);
    }else{
      //$products->printAllProductsListView2();
      $products->printAllProductsBlockView();
    }
  ?>
</div>

	<!--<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>-->
  <!--
  <div class="pagination">
  <ul>
  <li><a href="#">&lsaquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">...</a></li>
  <li><a href="#">&rsaquo;</a></li>
  </ul>
  </div>
-->
	<br class="clr"/>
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
