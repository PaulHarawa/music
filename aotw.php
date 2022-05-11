<?php

	include "conn.php";
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<title>Music Pablo - Aotw</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="fontawesome/css/brands.min.css" rel="stylesheet" type="text/css">
	<link href="icon2.png" rel="icon">

	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		body{
			background-color: rgb(0, 0, 0);
		}
		.bg-white-all{
			background-color: #F1F3F4;
		}
		.align-items-all{
			text-align: center;
		}
		.align-items-allx{
			margin: auto;
		}
		.bg-dark-all{
			background-color: rgba(0, 0, 0, 0.8);
		}
		.bg-dark-new{
			background-image: linear-gradient(to right,#F1F3F4,#F1F3F4,#0D6EA7);
			border: none;
		}
		.bg-white-all-xxxy{
			background-image: linear-gradient(to right,#0D6EA7,#F1F3F4,#0D6EA7);
			border: none;
		}
		.edit-e{
			border-radius: 50%;
			border: 1px solid blue;
		}
		.edit-b{
			border-radius: 50%;
		}
	</style>
</head>
<body>
	
	 <div class="row">
	 	<div class="col-12 bg-dark-all text-white">
	 		<div class="col-12 align-items-all"><h2><?php 

		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$artist = $row['artist'];
		            	echo"<br>$artist";

		        	?></h2></div>
	 		

	 		<div class="col-12 p-4 text-center"><p><?php 

		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$story = $row['story'];
		            	echo"$story";

		        	?></p>
		     </div>

	 		<?php 
	 				$sqlx = "SELECT * FROM week";
		            $resultx = mysqli_query($conn,$sqlx);
		            $rowx= mysqli_fetch_array($resultx);
		            	$artistx = $rowx['artist'];

					$sql = "SELECT * FROM songs WHERE artist='$artistx'";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$id = $row['id'];
								$file = $row['file'];
								$artist = $row['artist'];
								$title = $row['title'];
								$date =$row['date'];
								$time = $row['time'];
								$downloads = $row['downloads'];

								echo"

								<div class='col-sm-12 col-md-5 col-lg-5 col-xl-5 mx-auto p-4'>
						          <div class='card shadow-sm bg-white-all bg-dark-new'>
						            <div class='card-body'>
						              <p class='card-text text-dark'><b>$artist - $title (audio)</b></p>
						              <div class='d-flex justify-content-between align-items-center'>
		                				<div class='btn-group'>
		                				  <form action='aotw.php' method='post' enctype='multipart/form-data'>
		                				  	<button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='pn'><i class='fa fa-play'></i></button>
		                  					<button type='submit' class='btn btn-sm btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
		                  					<input type='radio' value='$id' name='id' checked hidden>
		                  				  </form>
		                				</div>
		              				  </div>
						            </div>
						          </div>
						        </div>

								";
							}
						}
						
						?>

						<?php

							if(isset($_POST['dn'])){
								$sid = $_POST['id'];
		                        $_SESSION['sid'] = $sid;

		                        echo"<script>window.location.href='p.php';</script>";
							}

						?>

						<br>

	 	</div>
	 </div>


<!-- ******************************************************************** -->
		<div>
			<br><br><br><br><br><br>
		</div>
<!-- ******************************************************************** -->

<div class="row">
	<div class="col-12 bg-dark">
		<div class="col-11 align-items-all p-2 text-white">
			<p>Upload your songs now at K600.00 only</p>
			<img class="p-2" width="50" src="img/whatsapp.png">
			<p>+265 999 358 339</p>
		</div>
	</div>	
</div>

<!-- ******************************************************************** -->
		<div>
			<br><br><br><br><br><br>
		</div>
<!-- ******************************************************************** -->

			<?php

				if(isset($_POST['pn'])){
					$sid = $_POST['id'];
		      $_SESSION['play'] = $sid;

		      echo"<script>window.location.href='aotw.php';</script>";
				}

			?>

<div class="row p-0">
			<?php

				if (isset($_SESSION['play'])) {

						$pid = $_SESSION['play'];

				    $sql = "SELECT * FROM songs WHERE id='$pid'";
				    $result = mysqli_query($conn,$sql);

				    $row = mysqli_fetch_array($result);

				    $sname = $row['file'];

					echo"	
					<nav class='col-12 navbar navbar-dark bg-white-all-xxxy fixed-bottom' aria-label='Fourth navbar example'>
						<div class='container-fluid p-1'>

							<audio autobuffer autoloop loop controls autoplay class='mx-auto edit-e'>
									<source src='uploads/$sname'>
							</audio>
						</div>
						<form action='aotw.php' method='post' enctype='multipart/form-data' class='mx-auto'>
				          <button type='submit' type='button' class='btn btn-danger edit-b' name='stop'>stop</button>
				           <input type='radio' value='$id' name='id' checked hidden>
							</form>
  				</nav>


					";
				}

			?>

			<?php

			if(isset($_POST['stop'])){
				session_destroy();
				session_unset();
				echo"<script>window.location.href='aotw.php';</script>";
			}

			?>
	
	</div>



<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
