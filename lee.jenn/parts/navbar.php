<?php 

include_once "lib/php/functions.php"

?>

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<a href="index.php" class="header_logo">The Vine</a>
		</div>
		<div class="flex-stretch"></div>
		<nav class="nav-flex flex-none nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="checkout.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</div>
	</div>
</header>