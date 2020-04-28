<?php
	session_start();
	require_once('connection.php');
	if (isset($_SESSION['username'])) {
?>
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
			<div class="card bg-dark mt-1">
				<div class="card-title bg-success text-white mt-1">
					<div class="row">
						<div class="col-lg">
							<h6 class="text-left p-2"><?php echo 'Welcome '.$_SESSION['username']; ?></h6>
						</div>
						<div class="col-lg">
							<a href="logout.php?logout" class="btn btn-outline-light float-right p-1 m-1">Logout</a>
						</div>
					</div>
				</div>
				<div class="card-title bg-secondary text-white mt-1">
					<h4 class="text-center m-2">CHAT</h4>
				</div>
				<div class="col">
					<form action="message.php" method="post">
						<textarea name="msg" class="form-control mt-1"></textarea>
						<input type="submit" name="envoyer" class="btn btn-success float-right m=2">
					</form>
				</div>
				<?php
					if (isset($_GET['emptyMsg'])){
						?>
							<div class="alert alert-dark">
								You cannot send empty message !
							</div>
						<?php 
					}
				?>
				<div class="card-body">
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
					<table class="table table-dark table-hover">
						<tbody>
						<?php
							$query = "SELECT person,msg FROM messages ORDER BY msgid DESC";
							$reponse = $conn->query($query);
							while ($row=$reponse->fetch_assoc()){
								if ($row['person']=='tattar') {
									?>
										<tr>
											<td style="width: 5%" class="bg-danger text-black"><b><?php echo $row['person']; ?></b></td>
											<td style="width: 95%"><?php echo $row['msg']; ?></td>
										</tr>
									<?php
								}
								else{
									?>
										<tr>
											<td style="width: 5%" class="bg-success text-white "><b><?php echo $row['person']; ?></b></td>
											<td style="width: 95%"><?php echo $row['msg']; ?></td>
										</tr>
									<?php
								}
							}
						?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
?>}<?php
}else
header('location:index.php');