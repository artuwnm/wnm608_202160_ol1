<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room">
			<!-- back navigation -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="#">Back</a></li>
				</ul>
			</nav>

			<!-- checkout details -->
			<div class="checkout display-flex flex-wrap">
				
			<!-- checkout details -->
				<div class="checkout-detail flex-sixth display-flex">	
					
					<!-- thumbnail of product 60% -->
					<div class="checkout-thumbnail-image">	
						<a href="#">
							<img src="img/<?=$_GET['id']; ?>.jpg" alt="plant">
						</a>
					</div>

					<div class="checkout-thumbnail-text">
						<div class="checkout-thumbnail-text__title display-flex">	
							<h4 class="product-name">Monstera</h4>
							<h4 class="product-quantity">(1)</h4>
						</div>

						<button class="btn-tertiary">Delete</button>
					</div>						
				</div>

				
			<!-- checkout button section 40% -->
				<div class="checkout-button flex-fourth">	
					<h2>Total Amount</h2>
					
					<hr size="1px" width="100%" color="#f1f1f1">

					<h4>Subtotal:40.00</h4>
					<h4>Tax: $4.20</h4>

					<hr size="1px" width="100%" color="#f1f1f1">

					<div class="total-amount display-flex">
						<h3>Total</h3>	
						<h3>$44.20</h3>
					</div>

					
					<div class="button-style btn-primary">
						<a href="payment.php" class="btn-checkout">Checkout</a>
					</div>
				</div>		
			
			</div>




		</div>
		<?php include "parts/footer.php"; ?>	
	</div>

</body>
