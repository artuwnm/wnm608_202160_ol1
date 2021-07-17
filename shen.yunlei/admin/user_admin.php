<?php

include "../lib/php/functions.php";

$filename = "../data/products.json";
$products = file_get_json($filename);





//print_p([$_GET,$_POST]);

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'update':
			$products[$_GET['id']]->title = $_POST['products-title'];
			$products[$_GET['id']]->genres = $_POST['products-genres'];
			$products[$_GET['id']]->author = $_POST['products-author'];
			$products[$_GET['id']]->price = $_POST['products-price'];
			$products[$_GET['id']]->QTY = $_POST['products-QTY'];

			file_put_contents($filename,json_encode($products));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case "create":
			break;

		case "delete":
			break;
	}
}

// if(isset($_POST['products-title'])){
// 	$products[$_GET['id']]->title = $_POST['products-title'];
// 	$products[$_GET['id']]->genres = $_POST['products-genres'];
// 	$products[$_GET['id']]->author = $_POST['products-author'];
// 	$products[$_GET['id']]->price = $_POST['products-price'];
// 	$products[$_GET['id']]->QTY = $_POST['products-QTY'];

// 	file_put_contents($filename,json_encode($products));
// }



function showUserPage($products){

$id = $_GET['id'];

echo <<<HTML
<nav class="nav card">

	<ul>
		<li class="nav-crumbs"><a href="admin/user_admin.php">Back</a></li>
	</ul>
</nav> 
	<div class="container card">
		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">
			<div class="form-control">
				<label class="form-label" for="products-title">Title</label>
				<input class="form-input" name="products-title" id="products-title" type="text" value="$products->title" placeholder="Enter a Book Title">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-genres">Genres</label>
				<input class="form-input" name="products-genres" id="products-genres" type="text" value="$products->genres" placeholder="Enter the Book Genres">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-author">Author</label>
				<input class="form-input" name="products-author" id="products-author" type="text" value="$products->author" placeholder="Enter the Book Author">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-price">Price</label>
				<input class="form-input" name="products-price" id="products-price" type="text" value="$products->price" placeholder="Enter the Book Price">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-QTY">QTY</label>
				<input class="form-input" name="products-QTY" id="products-QTY" type="text" value="$products->QTY" placeholder="Enter Book Inventory">
			</div>
			<div class="form-control">
				<input class="form-button" type="submit" value="Save Changes">
			</div>
		</form>
	</div>
HTML;
}






?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>User Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none">
				<nav class="nav-flex flex-none">
					<ul>
						<li><a href="admin/user_admin.php">Book List</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	
	<div class="container">

		<div class="card soft">

			<?php 

			if (isset($_GET['id'])) {
				showUserPage($products[$_GET['id']]);
			} else {

			 ?>
			<h2>Book List</h2>

			<nav class="nav">
				<ul>
			
			<?php 
			
			for($i=0;$i<count($products);$i++){
				echo "<li>
					<a href='admin/user_admin.php?id=$i'>{$products[$i]->title}</a>
				</li>";
			}

			 ?>
			 	
			 	</ul>
			</nav>

			<?php } ?>
		</div>


	</div>


	


	<?php include "../parts/footer.php" ?>
</body>
</html>