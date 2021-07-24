<?php 
		
	include_once "lib/php/functions.php";
	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Add to Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="card soft">
			<div class="add_to_cart">
				<h2 >You added " <?= $product->title ?> " to your cart</h2>
			</div>
			<div class="display-flex">
				<div class="flex-none"><p><a href="browse.php">Continue Shopping</a></p></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><p><a href="cart.php">Go to Cart</a></p></div>
			</div>
		</div>
	</div>


	<?php include "parts/footer.php" ?>

</body>
</html>










