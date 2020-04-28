<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background:#CCC;">
<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card bg-dark mt-5">
				<div class="card-title bg-primary text-white mt-5">
					<h3 class="text-center m-3">Login Form</h3>
				</div>
				<div class="card-body">
					<?php if (isset($_GET['empty'])){
						?>
						<div class="alert alert-danger" role="alert">
							<?php echo $_GET['empty']; ?>
						</div>
						<?php
					}?>
					<?php if (isset($_GET['invalid'])){
						?>
						<div class="alert alert-danger" role="alert">
							<?php echo $_GET['invalid']; ?>
						</div>
						<?php
					}?>
					<form action="process.php" method="post">
						<input type="text" name="username" placeholder="User name" class="form-control mb-4">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<button name="buttonLogin" class="btn btn-success mt-4">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>