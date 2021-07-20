<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="card soft">
			<h2>Cart</h2>


<!-- 
			<div class="grid gap">
					<div class="card col-xs-12 book_checkout">
						<figure class="figure product">
							<img src="img/hp-01.jpg" alt="">
						</figure>
							<figcaption class="card">
								<div><a href="book_detail.php?id=1">Book Title</a></div>
								<div>$10.00</div>
								<a href="">Delet</a>
							</figcaption>
					</div>
					<div class="card col-xs-12 book_checkout">
						<figure class="figure product">
							<img src="img/hp-01.jpg" alt="">
						</figure>
							<figcaption>
								<div><a href="book_detail.php?id=2">Book Title</a></div>
								<div>$10.00</div>
								<a href="">Delet</a>
							</figcaption>
					</div>
					<div class="card col-xs-12 book_checkout">
						<figure class="figure product">
							<img src="img/hp-01.jpg" alt="">
						</figure>
							<figcaption>
								<div><a href="book_detail.php?id=3">Book Title</a></div>
								<div>$10.00</div>
								<a href="">Delet</a>
							</figcaption>
					</div>
					<div class="card col-xs-12 book_checkout">
						<figure class="figure product">
							<img src="img/hp-01.jpg" alt="">
						</figure>
							<figcaption>
								<div><a href="book_detail.php?id=4">Book Title</a></div>
								<div>$10.00</div>
								<a href="">Delet</a>
							</figcaption>
					</div>
				</div> -->


			<script>
				const makeTable = (classes='') => {
					const head = ['QTY','Book Title','Price','Total'];
					const body = [
					["Book Title", '$10.00','$10.00'],
					["Book Title", '$10.00','$10.00'],
					["Book Title", '$10.00','$10.00'],
					["Book Title", '$10.00','$10.00'],
					];

					//Let ran = Math.floor(Math.random()*links.length);
					document.write(`
					<table class="${classes}">
						<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
						<tbod>${body.reduce((r,o,i)=>r+
							`<tr>${
								[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
							}</tr>`,'')
						}</tbod>
					</table>
					`);
				}
			</script>

			<div class="container" id="table">

				<div class="card">
					<h3>Products checkout list</h3>

					<script>makeTable("table lined vertical")</script>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container">
		<button onclick="location.href = 'check_out.php'">Check Out
		</button>
	</div>

	<?php include "parts/footer.php" ?>
</body>
</html>