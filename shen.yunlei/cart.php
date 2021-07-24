<?php 
		
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,10)");

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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;47.23</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Tax</strong></div>
						<div class="flex-none">&dollar;5.00</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;52.23</div>
					</div>
					<div class="card-section">
						<a href="check_out.php" class="form-button">Check Out</a>
					</div>
				</div>
			</div>
		</div>

	</div>


	<?php include "parts/footer.php" ?>
</body>
</html>