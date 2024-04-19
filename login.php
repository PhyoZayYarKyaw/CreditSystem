

<?php
	require_once('db.php');
	if(isset($_POST['login'])){

		$admin_name=$_POST['admin_name'];
		$admin_email=$_POST['admin_email'];
		$admin_password=$_POST['admin_password'];

		$query="SELECT * FROM admin WHERE  name='$admin_name' AND email='$admin_email' AND password='$admin_password' limit 1";
		$result=mysqli_query($conn,$query);

		if(mysqli_num_rows($result)==1){

			
			header('Location:index.php');
			// exit();

		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 class="text-center">Sign In</h1>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="admin_name" class="form-control" placeholder="Name"><br>
				</div>
				<div class="form-group">
					<input type="email" name="admin_email" class="form-control" placeholder="Email"><br>
				</div>
				<div class="form-group">
					<input type="password" name="admin_password" class="form-control" placeholder="Password"><br>
				</div>
				<div class="form-group"><center>
					<input type="submit" name="login" value="Login" class="btn btn-primary" ></center>
				</div>

			</form>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>