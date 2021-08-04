<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
	"title"=>"Harry Potter",
	"author"=>"J.K Rowlling",
	"genre"=>"Fiction",
	"price"=>"15.00",
	"description"=>"This is Harry Potter",
	"stock"=>"20",
	"thumbnail"=>"img/hp-01.jpg",
	"images"=>"img/hp-02.jpeg"
];





// LOGIC
//if (isset($_GET['action'])) {
try{
	$conn = makePDOConn();
	switch ($_GET['action']) {
		case 'update':
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`title`=?,
					`author`=?,
					`genre`=?,
					`price`=?,
					`description`=?,
					`stock`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modify`=NOW()

					WHERE `id`=?
				");
			$statement->execute([
				$_POST['products-title'],
				$_POST['products-author'],
				$_POST['products-genre'],
				$_POST['products-price'],
				$_POST['products-description'],
				$_POST['products-stock'],
				$_POST['products-thumbnail'],
				$_POST['products-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`title`,
					`author`,
					`genre`,
					`price`,
					`description`,
					`stock`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
				)

				VALUES (?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['products-title'],
				$_POST['products-author'],
				$_POST['products-genre'],
				$_POST['products-price'],
				$_POST['products-description'],
				$_POST['products-stock'],
				$_POST['products-thumbnail'],
				$_POST['products-images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case "delete":
			$statement = $conn->prepare("DELETE FROM`products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}catch(PDOException $e){
	die($e->getMessage());
}









// TENMPLATES
function productListItem($r,$o){
	return $r.<<<HTML
	<div class="card soft">
		<div class="display-flex">
			<div class="flex-none image-thumbs"><img src="$o->thumbnail"></div>
			<div class="flex-stretch" style="padding: 1em;">$o->title</div>
			<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
		</div>
	</div>
HTML;

}


function showProductPage($o){

$id = $_GET['id'];

$addoredit = $id == "new" ? "Add": "Edit";
$createorupdate = $id == "new" ? "create": "update";
$images = array_reduce(explode (",", $o->images),function($r,$o){return $r."<img src='$o'>";});


$display = <<<HTML
	<div>
		<h2>$o->title</h2>
		<div class="form-control">
			<label class="form-label">Genre</label>
			<span>$o->genre</span>
		</div>
		<div class="form-control">
			<label class="form-label">Author</label>
			<span>$o->author</span>
		</div>
		<div class="form-control">
			<label class="form-label">Price</label>
			<span>&dollar;$o->price</span>
		</div>
		<div class="form-control">
			<label class="form-label">Stock</label>
			<span>$o->stock</span>
		</div>
		<div class="form-control">
			<label class="form-label">Description</label>
			<span>$o->description</span>
		</div>
		<div class="form-control">
			<label class="form-label">Thumbnail</label>
			<span class='image-thumbs'><img src='$o->thumbnail'></span>
		</div>
		<div class="form-control">
			<label class="form-label">Other images</label>
			<span class='image-thumbs'>$images</span>
		</div>
	</div>
HTML;

$form = <<<HTML
	<div class="container">
		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label" for="products-title">Title</label>
				<input class="form-input" name="products-title" id="products-title" type="text" value="$o->title" placeholder="Enter a Product Title">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-genre">Genres</label>
				<input class="form-input" name="products-genre" id="products-genre" type="text" value="$o->genre" placeholder="Enter the Product Genre">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-author">Author</label>
				<input class="form-input" name="products-author" id="products-author" type="text" value="$o->author" placeholder="Enter the Product Author">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-price">Price</label>
				<input class="form-input" name="products-price" id="products-price" type="number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-stock">Stock</label>
				<input class="form-input" name="products-stock" id="products-stock" type="number" min="0" max="1000" step="1" value="$o->stock" placeholder="Enter the Product Stock">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-description">Description</label>
				<textarea class="form-input" name="products-description" id="products-description" placeholder="Enter Product Description">$o->description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label" for="products-thumbnail">Thumbnail</label>
				<input class="form-input" name="products-thumbnail" id="products-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label" for="products-images">Other Images</label>
				<input class="form-input" name="products-images" id="products-images" type="text" value="$o->images" placeholder="Enter the Product images">
			</div>
			<div class="form-control">
				<input class="form-button" type="submit" value="Save Changes">
			</div>
		</form>
	</div>
HTML;

$output = $id == "new" ? "<div class='card'>$form</div>":
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
	<div class='card'><nav class="display-flex">
	 		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	 		<div class="flex-none">$delete</div>
	 	</nav></div> 

	$output
HTML;
}













 ?>
  <!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1 id="logo" onclick="location.href='index.php'">Bookworms</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none">
				<nav class="nav-flex flex-none">
					<ul>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<div class="container">
			
		<?php 

		if (isset($_GET['id'])) {
			showProductPage(

				$_GET['id']=="new"?
				$empty_product:
				makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
			
		} else {

			 ?>
			
			<h2>Product List</h2>
			<?php 
			
			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

			echo array_reduce($result,'productListItem');

			 ?>
			 <?php } ?>
			 	
	</div>
</body>














