<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>


<body>
	
	<?php include "parts/navbar.php"; ?>	

	<div class="container">
		<div class="card card-room">
			<!-- content goes here -->
<!-- navigation -->
			<nav class="nav nav-crumbs crumbs-opt">
				<ul>
					<li><a href="#">Back</a></li>
				</ul>
			</nav>

<!-- image and detail of item	 -->
			<div class="admin-edit display-flex flex-wrap">	
				<!-- image box -->
				<div class="pdp-image flex-half">	
						<!-- image for product here -->
						<img src="img/<?=$_GET['id']; ?>.jpg" class="pdp-product-image" alt="plant">
					</div>

				<!-- current detail box -->
					<div class="pdp-detail flex-half">
						<h2>Monstera</h2>
						<h3>$13.00</h3>
						<hr size="1px" width="100%" color="#f1f1f1">

						<h4>Description</h4>
						<p>Monstera is a low maintenance plant that needs to be watered once a week</p>	
						<hr size="1px" width="100%" color="#f1f1f1">

						<p>Quantity</p>
						<div class="pdp-quantity">	
							<input type="number" placeholder="00" class="form-input">
						</div>		
					</div>
			</div>

		</div>

		<!-- edit bar on bottom -->
			<div class="product-edit card card-room">
				<h3>Edit this product</h3>
				<form action="">
					<div class="form-control">
						<label for="" class="form-label">Product Name</label>
						<input type="text" placeholder="Product Name" class="form-input">
					</div>
				
					<div class="form-control">
						<label for="" class="form-label">Price</label>
						<input type="number" placeholder="Price (in number)" class="form-input">
					</div>


					<div class="form-control">
						<label for="" class="form-label">Description</label>
						<input type="text" placeholder="Description" class="form-input">
					</div>

					<div class="form-control">
						<label for="" class="form-label">Quantity</label>
						<input type="number" placeholder="Quantity" class="form-input">
					</div>
				</form>


				<div class="product-edit-btn">	
					<button class="admin-delete-btn">Delete Listing</button>
					<div class="admin-save-btn button-style btn-secondary">Save Changes</div>
				</div>	

			</div>	
	</div>


</body>
