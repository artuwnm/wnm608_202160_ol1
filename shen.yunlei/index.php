<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookworms</title>
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/best_seller_templates.js"></script>
	<script src="js/best_seller.js"></script>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	

	<div class="view-window" style="background-image: url('img/book.jpg');">
		<button class="shop-button">
			<a href="shop.php">Shop Now</a>
		</button>
	</div>

	<div class="container">
		<h2>Best seller of the week</h2>
		<div class='best-seller grid gap container'></div>
	
		<h2>Latest Fiction</h2>
		<?php recommendedGenre("Fiction");?>
		<h2>Latest Mystery</h2>
		<?php recommendedGenre("Mystery");?>
	</div>


	<?php include "parts/footer.php" ?>
	
</body>
</html>