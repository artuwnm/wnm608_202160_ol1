<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>


<body>
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room">
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop All</a></li>	
				</ul>
			</nav>

			<h2>All Plants</h2>

<!-- search bar -->
			<div class="form-control">
				<form class="hotdog hotdog-1" id="product-search">
					<i class="fa fa-search"></i>
					<input type="search" placeholder="What are you looking for?">
				</form>
			</div>

<!-- filter buttons & sort side by side -->
		<!-- filter buttons -->
			<div class="form-control display-flex filternsort">
				<div class="display-flex filter">
					<div class="flex-none">
						<button data-filter="category" data-value="" type="button" class="filter-button">All</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="leaf" type="button" class="filter-button">Plant</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="flower" type="button" class="filter-button">Flower</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="cactus" type="button" class="filter-button">Cactus</button>
					</div>
				</div>
		<!-- dropdown menu sort -->
				<div class="form-select sort">	
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price: Low to High</option>
						<option value="4">Price: High to Low</option>
					</select>
				</div>
			</div>

		<div class='productlist grid gap'>
			
		</div>
		


		</div>
		<!-- add footer here -->
		<?php include "parts/footer.php"; ?>
	</div>
</body>
</html>