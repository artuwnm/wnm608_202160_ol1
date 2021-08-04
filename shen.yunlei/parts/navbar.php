<?php 

include_once 'lib/php/functions.php';
 ?>
<script>
	const makeNav = (classes='')=>{
		const links = ['home','store','about'];
		let ran = Math.floor(Math.random()*links.length);
		document.write( `
		<div>
			<nav class="${classes}">
			 	<ul>
			 	${links.reduce((r,o,i)=>{
			 		return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
			 	},'')}
			 	</ul>
			 </nav> 


		</div>
		`);
	}
</script>
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1 id="logo" onclick="location.href='index.php'">Bookworms</h1>
			</div>

			<div class="flex-stretch"></div>

			<div class="flex-none nav-flex">
				<ul class="container">
					<li><a href="about.php">About</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="cart.php">
							<span>Cart</span>
							<span class="badge"><?= makeCartBadge(); ?></span>
						</a></li>
					<li><a href="admin/index.php">Admin only</a></li>
				</ul>
			</div>
		</div>
	</header>