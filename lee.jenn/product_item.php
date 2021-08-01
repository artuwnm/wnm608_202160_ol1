<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$images = explode(", ", $product->images);
$image_elements = array_reduce($images, function($r, $o) {
	return $r."<img src='$o'>";
});

//print_p($product);
//print_p($_SESSION);		


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>	
	<script src="js/product_thumbs.js"></script>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	


	<div class="container">	
		<div class="card card-room">	
<!-- crumb navigation here -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop All</a></li>
					<li><a href="product_item.php?id=<?=$_GET['id']; ?>"><?= $product->product_name ?></a></li>	
				</ul>
			</nav>
			

		


<!-- product detail here -->
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card card-room pdp-image">
					<div class="images-main">
						<img src="<?= $product->thumbnail ?>" alt="plant">
					</div>

					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>

<!-- product-detail card -->
			<div class="col-xs-12 col-md-5">
				<form class="card card-room" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" value="<?= $product->id ?>" name="product-id">

					<div class="card-section">
						<h2 class="product-title"><?= $product->product_name ?></h2>
						<div class="product-price">&dollar;<?= $product->price ?></div>
						<hr size="1px" padding="2em" width="100%" color="#f1f1f1">
						<h3>Product Description</h3>
						<div class="product-description"><?= $product->description ?></div>
					</div>

					<div class="card-section product-amount">
						<h3>Product Amount</h3>
						
						<div class="form-select">	
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<h3>Product Size</h3>
						
						<div class="form-select size-options">	
							<select id="product-size" name="product-size">
								<option>small</option>
								<option>large</option>
							</select>
						</div>
					</div>

					<div class="card-section">
						<div>
							<input type="submit" value="Add To Cart" class="btn-primary button-style">
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- RECOMMENDED PRODUCTS START -->

	<!-- recommended products here -->
		
			<div class="container">
				<h3>Other Products You Might Like</h3>
					<?php recommendedSimilar($product->category,$product->id); ?>
				<h3>Browse More</h3>
				<h6>Latest Plant Collections</h6>
					<?php recommendedCategory("leaf"); ?>
				<h6>Latest Cactus Collections</h6>
					<?php recommendedCategory("cactus"); ?>
			</div>
<!-- RECOMMENDED PRODUCTS END -->



		</div>	
		<?php include "parts/footer.php"; ?>
	</div>



</body>


</html>