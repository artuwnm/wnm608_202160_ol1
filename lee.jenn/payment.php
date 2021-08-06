<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Information</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room">
			<!-- back navigation -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="checkout.php">Back</a></li>
				</ul>
			</nav>

			<!-- payment -->
				<!-- payment details -->
			<div class="grid grid-gap">
				<div class="col-xs-12 col-md-7 shipping-info">	
					<form action="">
						<!-- Shipping information form -->
						<h3>Shipping Information</h3>
						<div class="form-control">
							<label for="" class="form-label">Street Address</label>
							<input type="text" placeholder="Street Address" class="form-input">
						</div>

						<div class="form-control display-flex">
							<div class="flex-stretch form-half">
								<label for="" class="form-label">County</label>
								<input type="test" placeholder="County" class="form-input">
							</div>
							
							<div class="flex-stretch">
								<label for="" class="form-label">State</label>
								<input type="text" placeholder="State" class="form-input">
							</div>	
						</div>

						<div class="form-control">
							<label for="" class="form-label">Postal Code</label>
							<input type="number" placeholder="Postal Code" class="form-input">
						</div>

						<!-- Payment information form -->
						<h3>Payment Information</h3>
						<div class="form-control">
							<label for="" class="form-label">Card Number</label>
							<input type="text" placeholder="Card Number" class="form-input">
						</div>

						<div class="form-control display-flex">
							<div class="flex-stretch form-half">
								<label for="" class="form-label">Expiration Date</label>
								<input type="test" placeholder="Expiration Date" class="form-input">
							</div>
							
							<div class="flex-stretch">
								<label for="" class="form-label">CVV</label>
								<input type="text" placeholder="CVV" class="form-input">
							</div>	
						</div>			
					</form>
				</div>


				<!-- the other half -->
				<div class="col-xs-12 col-md-5 cart-price-details no-padding">	
					<div class="card card-room">
						<h3>Summary</h3>
						<div class="card-section">
							<?php 
							echo array_reduce($cart, function($r,$o){
							$totalfixed = number_format($o->total,2,'.','');
							return $r."<div class='display-flex'>
								<div class='flex-stretch'>$o->product_name</div>
								<div class='flex-none'>&dollar;$totalfixed</div>
							</div>";
						}) ?>
						</div>
						<hr size="1px" width="100%" color="#f1f1f1">
						<?= cartTotals(); ?>

						<div class="btn-pay">
							<a href="confirm.php" class="btn-payment button-style btn-primary flex-stretch">
							Purchase</a>
						</div>
						
					</div>
				</div>	
			</div>	

				
					
			</div>


	</div>
	<?php include "parts/footer.php"; ?>

</body>
