<div id="sidebar" class="span3">
	<div class="well well-small">
		<a id="myCart" href="product_summary.php">
			<img src="themes/images/ico-cart.png" alt="cart"><?php echo $cart->getCartCount();?> Items in your cart
			<span class="badge badge-warning pull-right">Php <?php echo $cart->getCartTotal(); ?></span>
		</a>
	</div>
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<li><h3 class="text-center" style="text-align:center;">CATEGORY</h3></li>
		<?php
		$products->printAllCategories();
		?>
		</ul>
	<br/>
</div>
