<?php 

	include "conn.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<title>Music Pablo - login</title>
	<link href="icon2.png" rel="icon">

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		.align-items-all{
			text-align: center;
		}
	</style>
</head>
<body class="bg-dark">

	<div>
		<br><br><br><br>
	</div>


		<div class="row">
			<div class="col-12">
				<div class="col-11 align-items-all text-dark">
				 <form action="2001.php" method="POST">					
					<input type="text" name="username" placeholder="Username" size="30" required> <br><br>
					<input type="password" name="password" placeholder="Password" size="30" required>
					<br><br><br>
					<button class="btn btn-outline-primary" type="submit" name="login">Login</button>
				 </form>

				 <?php

				 	if (isset($_POST['login'])) {
				 		$username = $_POST['username'];
				 		$password = $_POST['password'];

				 		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
				 		$result = mysqli_query($conn,$sql);

				 		if($result){
				 			if(mysqli_num_rows($result)>0){
				 				session_start();
				 				$_SESSION['username'] = $username;
				 				
				 				echo"<script type='text/javascript'>

				 					window.location.href='dead.php';

				 				</script>";
				 			}
				 			else{
				 				echo "<br><p class = 'text-danger'>Wrong username AND/OR password</p>";
				 			}
				 		}
				 		else{
				 			echo"<br><p class='text-danger'>Query did not execute</p>";
				 		}
				 	}

				 ?>

				</div>
			</div>
		</div>


	<div>
		<br><br><br><br>
	</div>

	
</body>
</html>