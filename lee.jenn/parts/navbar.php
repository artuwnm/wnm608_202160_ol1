<?php 
include_once "lib/php/functions.php"
?>

<input type="checkbox" id="menu" class="hidden">

<header class="navbar">
	<div class="container display-flex navigation">
		<div class="flex-none header_container">
			<a href="index.php" class="header_logo">The Vine</a>
		</div>
		<div class="flex-stretch emptybox"></div>
		
		<!-- hamburger menu -->
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>

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