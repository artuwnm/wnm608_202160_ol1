<?php 

include_once "lib/php/functions.php";
$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];
//$cart_product = array_find(getCart(),function($o) {return $o->id==$_GET['id'];});
$cart_product = cartItemById($_GET['id']);

		

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Added to Cart</title>
	<?php include "parts/meta.php"; ?>
</head>

<body>
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room item-added-to-cart">
			<h2><span class="color-divide">You added</span> <?= $product->product_name ?> <span class="color-divide">to your cart</span></h2>
			<p><?= $cart_product->amount ?> <?= $product->product_name ?> now in your cart!</p>

			<div class="display-flex added-to-cart-after-action">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="checkout.php">Go to Cart</a></div>
			</div>	
			

		</div>
	</div>

</body>
