<?php 
		
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,10)");

	$cart = getCart();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<h2>Cart</h2>

		<?php 
			if(count($cart)){

		 ?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce(getCartItems(), 'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
					
				<div class="card-section">
					<a href="check_out.php" class="form-button">Check Out</a>
				</div>
				</div>
			</div>
		</div>

		<?php 
		}else{
		 ?>
		 <div class="card soft">
		 	<p>No items in your cart.</p>
		 </div>	
		 	
		 	<h3>Other Recommendations</h3>
		 	<?php recommendedAnything(6);?>
		 
		 <?php 
		} 
		?>

	</div>


	<?php include "parts/footer.php" ?>
</body>
</html>