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
					<li><a href="browse.php">Browse</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="admin_login.php">Admin</a></li>
				</ul>
			</div>
		</div>
	</header>