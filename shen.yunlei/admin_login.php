<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h3>Administrator login</h3>
				<div class="form-control">
					<label class="form-label">Admin</label>
					<input type="text" placeholder="Admin" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Password</label>
					<input type="password" placeholder="Password" class="form-input">
				</div>
		
			<div class="container">
				<button onclick="location.href = 'admin.php'">Log In
				</button>
			</div>
		</div>
	</div>





	<?php include "parts/footer.php" ?>
	
</body>
</html>