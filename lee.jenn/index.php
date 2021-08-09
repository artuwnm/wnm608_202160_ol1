<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card">

			<!-- content goes here -->
			<div class="cta-section display-flex flex-direction-col">
				<h1 class="cta-h1">Potted Plants for Every Occasion, <br> Delivered to Your Doorstep.</h1>
				<button class="button-style btn-primary btn-shop-now">
					<a href="product_list.php">Shop Now</a>
				</button>
			</div>

<!-- promotion section (4 items)-->
			<div class="promo-section display-flex flex-wrap">
				<div class="promo promo-1 flex-half">	
					<h3 class="promo-h3">Add a Little Color</h3>
					<a href="product_list.php" class="promo-anchor">Shop Now ></a>
					<!-- bg-img in css -->
				</div>

				<div class="promo promo-2 flex-half">	
					<h3 class="promo-h3">Brighten Your Workspace</h3>
					<a href="product_list.php" class="promo-anchor">Shop Now ></a>
					<!-- bg-img in css -->
				</div>

				<div class="promo promo-3 flex-half">	
					<h3 class="promo-h3">Exotic Plants</h3>
					<a href="product_list.php" class="promo-anchor">Shop Now ></a>
					<!-- bg-img in css -->
				</div>

				<div class="promo promo-4 flex-half">	
					<h3 class="promo-h3">Low Maintenance</h3>
					<a href="product_list.php" class="promo-anchor">Shop Now ></a>
					<!-- bg-img in css -->
				</div>
			</div>


			<!-- include footer here -->
			<?php include "parts/footer.php"; ?>
		</div>
	</div>


</body>
