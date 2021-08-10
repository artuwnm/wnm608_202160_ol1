<?php 
		
	include_once "lib/php/functions.php";
	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

	$cart_product = cartItemById($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Place Order</title>
	
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<div class="card soft align-text-center">
			<h2>You added <?= $product->title ?> to your cart.</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->title ?> in your Cart</p>

			<div class="display-flex">
				<div class="flex-none"><a href="shop.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="cart.php">Go To Cart</a></div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>