<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4, 7, 10)");


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
						<?= array_reduce($cart, 'cartListTemplate') ?>
					</div>
				</div>

			<!-- DETAILS INSIDE CART -->
				<div class="col-xs-12 col-md-5 cart-price-details">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;120.00</div>
					</div>
					<hr size="1px" width="100%" color="#f1f1f1">

					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;12.99</div>
					</div>
					<hr size="1px" width="100%" color="#f1f1f1">

					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;132.99</div>
					</div>
					<hr size="1px" width="100%" color="#f1f1f1">

					<div class="card-section display-flex checkout-box">
						<a href="payment.php" class="button-style btn-primary btn-checkout">Buy Now</a>
					</div>
				</div>
			</div>

			




		</div>
		<?php include "parts/footer.php"; ?>	
	</div>

</body>
