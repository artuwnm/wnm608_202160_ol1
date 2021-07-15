<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>	
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	


	<div class="container">	
		<div class="card card-room">	
<!-- crumb navigation here -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop All</a></li>
					<li><a href="#">Product # <?=$_GET['id']; ?></a></li>	
				</ul>
			</nav>
			
<!-- product detail here -->
			<div class="pdp display-flex flex-wrap">	
				<!-- image box -->
				<div class="pdp-image flex-half">	
					<!-- image for product here -->
					<img src="img/<?=$_GET['id']; ?>.jpg" class="pdp-product-image" alt="plant">
				</div>

				<!-- detail box -->
				<div class="pdp-detail flex-half">
					<h2>Monstera</h2>
					<h3>$13.00</h3>
					<hr size="1px" width="100%" color="#f1f1f1">

					<h4>Description</h4>
					<p>Monstera is a low maintenance plant that needs to be watered once a week</p>	
					<hr size="1px" width="100%" color="#f1f1f1">

					<p>Quantity</p>
					<div class="pdp-quantity">	
						<input type="number" placeholder="1" class="form-input">
					</div>	

					<button class="button-style btn-primary">
						<a href="checkout.php?id=<?=$_GET['id']; ?>" class="button-style-none">Add to Cart</a>
					</button>	
				</div>
			</div>	


<!-- recommended products here -->
			<h3>Products You Might Like</h3>
			<div class="grid gap">
				<!-- recommend product1 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
						<!-- dynamically change image here - recommendation image	 -->
							<a href="product_item.php?id=5">
								<img src="img/5.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>
				

				<!-- recommend product2 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<!-- dynamically change image here - recommendation image	 -->
							<a href="product_item.php?id=4">
								<img src="img/4.jpg" alt="">
							</a>

							<figcaption>
								<div>product name</div>
								<div>$13.99</div>
							</figcaption>
						</figure>
					</div>
					

				<!-- recommend product3 -->
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<!-- dynamically change image here - recommendation image	 -->
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
		<?php include "parts/footer.php"; ?>
	</div>



</body>


</html>