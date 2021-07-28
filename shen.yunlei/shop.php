<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
			<h2>Book List</h2>


			<?php 
			
			$result = makeQuery 
				(makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create`
				LIMIT 12
				"
			);

			echo "<div class='product grid gap'>",array_reduce($result,'bookListTemplate'),"</div>";


			 ?>
	</div>


	<?php include "parts/footer.php" ?>

</body>
</html>