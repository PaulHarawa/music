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
	<title>Music Pablo - process</title>

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
		
		.bg-white-all{
			background-color: #F1F3F4;
		}
		.align-items-all{
			text-align: center;
		}
		.bg-dark-all{
			background-color: rgba(0, 0, 0, 0.7);
		}
	</style>
</head>
<body class="bg-dark">
	<!-- ******************************************************************** -->
		 <div class="row">
		  <nav class="col-12 navbar navbar-expand navbar-dark bg-dark fixed-top" aria-label="Fourth navbar example">
		    <div class="container-fluid">
		      <a class="navbar-brand" href="index.php"><strong>Music Pablo</strong></a>
		    </div>
		    <a href="index.php" class="navbar-brand">Back</a>
		  </nav>
		  <br>
		</div>
	 <!-- ******************************************************************** -->
	  
	 <!-- ******************************************************************** -->

	<div class="row">
	<div class="col-12 bg-dark">
		<div class="col-12 align-items-all p-2">
			<form action="index.php" method="POST">
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="1">#</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="A">A</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="B">B</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="C">C</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="D">D</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="E">E</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="F">F</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="G">G</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="H">H</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="I">I</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="J">J</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="K">K</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="L">L</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="M">M</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="N">N</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="O">O</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="P">P</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="Q">Q</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="R">R</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="S">S</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="T">T</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="U">U</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="V">V</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="W">W</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="X">X</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="Y">Y</button>
				<button class="btn btn-sm btn-outline-primary m-1" type="submit" name="Z">Z</button>
			</form>
		</div>
	</div>
</div>
	 <!-- ******************************************************************** -->
	  <div>
	  	<br><br>
	  </div>
	 <!-- ******************************************************************** -->
	 	

	 <div class="row">
		<div class="col-12 bg-dark-all p-0">
			<br>
				<h3 class="col-12 p-2 align-items-all text-warning"><?php

					$sid = $_SESSION['sid'];

						echo"<b>$sid</b>";

				?> <i class="h5 text-white"> - songs</i>
				</h3>

				<?php 
				  if(isset($_SESSION['sid'])){
				  	$sid = $_SESSION['sid'];
					$sql = "SELECT * FROM songs WHERE artist='$sid' ORDER BY id DESC";
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

								<div class='col-sm-12 p-3 col-md-5 col-lg-5 col-xl-5 mx-auto'>
						          <div class='card shadow-sm bg-white-all'>
						            <div class='card-body'>
						              <p class='card-text'><b>$artist - $title (audio)</b></p>
						              <div class='d-flex justify-content-between align-items-center'>
		                				<div class='btn-group'>
		                				  <form action='process.php' method='post' enctype='multipart/form-data'>
		                  					<button type='submit' class='btn btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
		                  					<input type='radio' value='$id' name='id' checked hidden>
		                  				  </form>
		                				</div>
		                			  	<div>
		                					<p><i>$downloads downloads</i></p>
		                			  	</div>
		              				  </div>
						            </div>
						          </div>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12'>
									<h2>No music of this artist found.</h2>
								</div>

							</div>";
						}
					}

				?>

				
	        <br><br>
		</div>
	</div>




	

<!-- ******************************************************************** -->
		
<!-- ******************************************************************** -->

<div class="row">
	<div class="col-12 bg-dark">
		<div class="col-12 align-items-all p-2 text-white">
			<p>Upload your songs now at <b>K600.00</b> only</p>
			<img class="p-2" width="50" src="img/whatsapp.png">
			<p>+265 999 358 339</p>
		</div>
	</div>
	</div>	
</div>

<script src="js/bootstrap.bundle.min.js"></script>

<?php

					if(isset($_POST['dn'])){
						$sid = $_POST['id'];
                        $_SESSION['sid'] = $sid;

                        echo"<script>window.location.href='p.php';</script>";
					}

				?>

</body>
</html>
