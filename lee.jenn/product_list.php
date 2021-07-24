<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<!-- <div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div> -->

	<div class="container">
		<div class="card card-room">
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop All</a></li>	
				</ul>
			</nav>


			<div class="product-list-title display-flex flex-wrap">
			<!-- section title -->
				<h2>All Plants</h2>
				
			<!-- options for filter and sorting -->
				<div class="form-select">
					<select>
						<option>Alphabetical</option>
						<option>Price low to high</option>
						<option>Price high to low</option>
						<option>Most popular</option>
					</select>
				</div>	
			</div>


<!-- product lists -->
		<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";
		$result = makeQuery(
			makeConn(), 
			"
			SELECT * 
			FROM `products`
			ORDER BY `date_create`
			LIMIT 12
			"
		);
		
		echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";

		?>
		

		</div>
		<!-- add footer here -->
			<?php include "parts/footer.php"; ?>
	</div>





</body>


</html>