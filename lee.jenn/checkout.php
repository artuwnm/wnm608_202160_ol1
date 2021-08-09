<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4, 7, 10)");
$cart_items = getCartItems();
$cart = getCart();

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
			<?php
			if(count($cart)) {
				?>
				<div class="grid gap">
					<div class="col-xs-12 col-md-7 cart-item-details">
						<div class="card card-room">
							<?= array_reduce($cart_items, 'cartListTemplate'); ?>
						</div>
					</div>

			<!-- DETAILS INSIDE CART -->
					<div class="col-xs-12 col-md-5 cart-price-details">
						<div class="card card-room">
							<?= cartTotals() ?>
							<div class="card-section display-flex checkout-box">
								<a href="payment.php" class="button-style btn-primary btn-checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			<?php
			} else {
				?>
				<div class="card card-room margin-bottom">
					<p style="text-align:center">There's no item in your cart 😮</p>
					<hr size="1px" width="100%" color="#f1f1f1"> 
					<h3 style="margin-top:2.5em; margin-bottom:1.5em; text-align:center;">Recommendations for you</h3>
					<?php recommendedAnything(6); ?>
				</div>
				<?php
			}
		?>
		
		<?php include "parts/footer.php"; ?>	
		</div>
	</div>

</body>
