<?php 
include "../lib/php/functions.php";

$empty_product = (object)[
	"product_name"=>"Bunny Ear Cactus",
	"description"=>"This unique looking cactus is a low maintenance cactus that  needs water once a week",
	"price"=>"35.00",
	"category"=>"cactus",
	"thumbnail"=>"img/barrel2.jpg",
	"images"=>"img/barrel.jpg",
	"quantity"=>"10"
];


// LOGIC
try {
	$conn = makePDOConn();
	switch($_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET 
					`product_name`=?,
					`price`=?,
					`quantity`=?,
					`category`=?,
					`description`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product_name'],
				$_POST['product_price'],
				$_POST['product_quantity'],
				$_POST['product_category'],
				$_POST['product_description'],
				$_POST['product_thumbnail'],
				$_POST['product_images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`product_name`,
					`price`,
					`quantity`,
					`category`,
					`description`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES (?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product_name'],
				$_POST['product_price'],
				$_POST['product_quantity'],
				$_POST['product_category'],
				$_POST['product_description'],
				$_POST['product_thumbnail'],
				$_POST['product_images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
		}
} catch(PDOException $e) {
	die($e->getMessage());
}










// TEMPLATES
function productListItem($r,$o){
return $r.<<<HTML
<div class="card card-room-small margin-bottom">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='$o->thumbnail'></div>
		<div class="flex-stretch"style="padding:1em">$o->product_name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
} 


function showProductPage($o){
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(", ", $o->images),function($r,$o){ return $r."<img src='$o'>";});


$display = <<<HTML
<div>
	<h2>$o->product_name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>

	<div class="form-control">
		<label class="form-label">Quantity</label>
		<span>$o->quantity</span>
	</div>

	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>

	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>

	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="images-thumbs"><img src='$o->thumbnail'></span>
	</div>

	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class="images-thumbs">$images</span>
	</div>
</div>
HTML;

//heredoc
$form = <<<HTML
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">		
		<h2>$addoredit Product</h2>

		<div class="form-control">
			<label class="form-label" for="product_name" >Product Name</label>
			<input class="form-input" name="product_name" id="product_name" type="text" value="$o->product_name" placeholder="Enter product name">
		</div>
		<div class="form-control">
			<label class="form-label" for="product_quantity" >Product Quantity</label>
			<input class="form-input" name="product_quantity" id="product_quantity" type="Number" min="0" max="1000" step="1" value="$o->quantity" placeholder="Enter product quantity">
		</div>
		<div class="form-control">
			<label class="form-label" for="product_price" >Price</label>
			<input class="form-input" name="product_price" id="product_price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter product price">
		</div>
		<div class="form-control">
			<label class="form-label" for="product_category" >Category</label>
			<input class="form-input" name="product_category" id="product_category" type="text" value="$o->category" placeholder="Enter product category">
		</div>
		<div class="form-control">
			<label class="form-label" for="product_description" >Description</label>
			<textarea class="form-input" name="product_description" id="product_description" type="text" placeholder="Enter product description">$o->description</textarea>
		</div>
		<div class="form-control">
			<label class="form-label" for="product_thumbnail" >Thumbnail</label>
			<input class="form-input" name="product_thumbnail" id="product_thumbnail" type="text" value="$o->thumbnail" placeholder="Enter product thumbnail">
		</div>
		<div class="form-control">
			<label class="form-label" for="product_name" >Other Images</label>
			<input class="form-input" name="product_images" id="product_images" type="text" value="$o->images" placeholder="Enter product images">
		</div>


		<div class="form-control">
			<input type="submit" value="Save Changes" class="form-button">
		</div>
	</form> 
HTML;

$output = $id == "new" ? "<div class='card card-room-small'>$form</div>" : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card card-room'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card card-room'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card card-room-small margin-bottom margin-top">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
</div>
$output
HTML;
}






?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>

<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<a href="index.php" class="header_logo" style="padding:0">Back to Main Site</a>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<?php 
		if(isset($_GET['id'])) {
			showProductPage(
				$_GET['id']=="new" ? 
					$empty_product : 
					makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
			
		} else {

		?>
		<h2>Product List</h2>
			<?php 

			$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");
			echo array_reduce($result,'productListItem');

			?>
		<?php } ?>
 
	</div>
</body>