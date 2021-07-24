<?php 
		
	include_once "lib/php/functions.php";
	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

	$images = explode(",", $product->images);

	$image_elements = array_reduce($images, function($r,$o){
		return $r."<img src='$o'>";
	});

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Detail</title>
	
	<?php include "parts/meta.php"; ?>


	<script src="js/product_thumbs.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<h2>Book Details</h2>
		<nav>
			<a href="browse.php">Back</a>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7 ">
				<div class="card soft">
					<div class="image-main">
						<img src="<?= $product->thumbnail ?>">
					</div>
					<div class="image-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2 class="product-price"><?=$product->title ?></h2>
						<div class="product-price">&dollar;<?=$product->price ?></div>
					</div>

					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select" id="product-amount">
							<select name="" id="">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
							</select>
						</div>
					</div>

					<div class="card-section">
						<a href="book_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card dark">
			<p><?= $product->description ?></p>
			
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>