<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<!-- <div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div> -->

	<div class="container">
		<div class="card card-room">
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop All</a></li>	
				</ul>
			</nav>


			<div class="product-list-title display-flex flex-wrap">
			<!-- section title -->
				<h2>All Plants</h2>
				
			<!-- options for filter and sorting -->
				<div class="form-select">
					<select name="" id="">
						<option>Alphabetical</option>
						<option>Price low to high</option>
						<option>Price high to low</option>
						<option>Most popular</option>
					</select>
				</div>	
			</div>

			<!-- product lists -->
			<div class="grid gap">
				<!-- product1 -->
					<div class="col-xs-12 col-md-4">
						
						<figure class="figure product">
							<a href="product_item.php?id=1">
								<img src="img/1.jpg" alt="plant">
							</a>
							
							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>
				
				<!-- product2 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=2">
								<img src="img/2.jpg" alt="">
							</a>
							
							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>
					

				<!-- product3 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=3">
								<img src="img/3.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product4 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=4">
								<img src="img/4.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product5 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=5">
								<img src="img/5.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product6 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=6">
								<img src="img/6.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product7 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=7">
								<img src="img/7.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product8 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=8">
								<img src="img/8.jpg" alt="">
							</a>
							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product9 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=9">
								<img src="img/9.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product10 -->
					<div class="col-xs-12 col-md-4 .col-lg-2">
						<figure class="figure product">
							<a href="product_item.php?id=10">
								<img src="img/10.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product11 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=11">
								<img src="img/11.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				<!-- product12 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<a href="product_item.php?id=12">
								<img src="img/12.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>

				</div>




		</div>

		<!-- add footer here -->
			<?php include "parts/footer.php"; ?>
	</div>



</body>


</html>