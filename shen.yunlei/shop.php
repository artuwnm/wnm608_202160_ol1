<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
			<h2>Book List</h2>
			<div class="form-control">
				<form class="search-bar" id="product_search">
					<input type="search" placeholder="Title or genre">
				</form>
			</div>

			<div class="form-control">
				<div class="grid gap xs-small md-mediump">
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="" type="button" class="filter-button">All</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Fiction" type="button" class="filter-button">Fiction</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Fantasy" type="button" class="filter-button">Fantasy</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Mystery" type="button" class="filter-button">Mystery</button>
					</div>
					<div class="col-xs-6 col-md-2">
						<button data-filter="genre" data-value="Thriller" type="button" class="filter-button">Thriller</button>
					</div>

					<div class="col-xs-6 col-md-2">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>
			</div>



			<div class='product grid gap'></div>


	</div>


	<?php include "parts/footer.php" ?>

</body>
</html>