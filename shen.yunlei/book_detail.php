<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Detail</title>
	
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="card soft display-flex">
			<div class="bgimg card"><img src="img/hp-01.jpg" alt=""></div>
			<div class="card">
				<h2>Bool Title</h2>
					<p>This is book # <?= $_GET['id']  ?></p>
					<p>Price $</p>
					<h3>Description</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, eius sit, ratione inventore iste deleniti aspernatur eveniet, natus adipisci magnam totam dignissimos in non nobis nostrum quos? Nulla, quos, non?</p>
					<hr>
					<button onclick="location.href='cart.php'">Add to cart</button>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>