<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4, 7, 10)");
$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room">
			<!-- back navigation -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="product_list.php">Back</a></li>
				</ul>
			</nav>

			<div class="grid gap">
			<!-- PRODUCT INSIDE CART  -->
				<div class="col-xs-12 col-md-7 cart-item-details">
					<div class="card card-room">
						<?
						if(count($cart_items)) {
							echo array_reduce($cart_items, 'cartListTemplate'); 
						} else {
							echo "<div class='empty_cart'><p>There's no Item in your Cart 😮</p> <a href='product_list.php'>Shop Now</a></div>";
						}
						?>
					</div>
				</div>

			<!-- DETAILS INSIDE CART -->
				<div class="col-xs-12 col-md-5 cart-price-details">
					<?= cartTotals() ?>
				</div>
			</div>

			




		</div>
		<?php include "parts/footer.php"; ?>	
	</div>

</body>
