<?php 

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);

$empty_user = (object) [
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];

// fx types: file_put_contents, json_encode, explode, $_POST
// assignment 1: make html form > done
// assignment 2: look at the new fx contents to update json file with info from the form
// assignment 3: make CRUD (Create, Read, Update, Delete); database basics


//print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes = explode(", ", $_POST['user-classes']);

			$id = count($users);

			$users[] = $empty_user;


			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case "delete":
			array_splice($users,$_GET['id'],1);
			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
		}
}




function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode(", ", $user->classes);


$display = <<<HTML
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>

	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>

	<div>
		<strong>Classes</strong>
		<span>$user->classes</span>
	</div>
</div>
HTML;

//heredoc
$form = <<<HTML
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">		
		<h2>$addoredit User</h2>

		<div class="form-control">
			<label for="user-name" class="form-label">Name:</label>
			<input type="text" value="$user->name" class="form-input" name="user-name" id="user-name" placeholder="Enter user name">

		</div>

		<div class="form-control">
			<label for="user-type" class="form-label">Type:</label>
			<input type="text" value="$user->type" class="form-input" name="user-type" id="user-type" placeholder="Enter user type">
		</div>

		<div class="form-control">
			<label for="user-email" class="form-label">Email:</label>
			<input type="text" value="$user->email" class="form-input" name="user-email" id="user-email" placeholder="Enter user email">
		</div>

		<div class="form-control">
			<label for="user-classes" class="form-label">Classes:</label>
			<input type="text" value="$classes" class="form-input" name="user-classes" id="user-classes" placeholder="Enter user classes, separated by comma">
		</div>

		<div class="form-control">
			<input type="submit" value="Save Changes" class="form-button">
		</div>
	</form> 
HTML;

$output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
HTML;
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
			</div>

		</div>
	</header>

	<div class="container">
		<div class="card card-room">

			<?php 

				if(isset($_GET['id'])) {
					showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
				} else {


			 ?>


			<nav class="nav">
				<ul>
			

			<?php 

			for($i = 0; $i < count($users); $i++) {
				echo 
				"<li>
					<a href='admin/users.php?id=$i'>{$users[$i] -> name}</a>
				</li>";
			}

			?>

				</ul>
			</nav>

			<?php } ?>
		</div>


	</div>
</body>


</html>