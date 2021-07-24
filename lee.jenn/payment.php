<!DOCTYPE html>
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
			<div class="payment display-flex flex-wrap">
				
				<!-- payment details -->
				<div class="payment-detail flex-sixth">	
					<!-- form goes here -->
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

				
				<!-- payment button -->
				<div class="payment-button flex-fourth">	
					<div class="button-style btn-primary">
						<a href="confirm.php" class="btn-payment">Purhcase</a>
					</div>
				</div>		
			</div>


		</div>

	</div>
	<?php include "parts/footer.php"; ?>

</body>
