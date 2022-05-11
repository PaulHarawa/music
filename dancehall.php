<?php

	include "conn.php";
	session_start();
	session_destroy();
	session_unset();

?>

<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<title>Music Pablo - DanceHall</title>

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
		.btn-dn{
			border: none;
		}
		.btn-dn:hover{
			background-color: transparent;
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
	 	<div class="col-12 bg-dark-all text-white">
	 		<br>
	 		<div class="col-12 align-items-all"><h2>DanceHall Archive</h2></div>
	 		

	 		<div class="col-12 p-4 text-center"><p><?php 

		            $sql = "SELECT DISTINCT artist FROM songs WHERE genre='DanceHall'";
		            $result = mysqli_query($conn,$sql);
		            $count = mysqli_num_rows($result);
		            echo"<b>$count</b> DanceHall artists found";

		        	?></p>
		     </div>

	 		<?php 

	 			$sql = "SELECT DISTINCT artist FROM songs WHERE genre='DanceHall' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='dancehall.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						
						?>

						<?php

							if(isset($_POST['dn'])){
								$sid = $_POST['id'];
		                        $_SESSION['sid'] = $sid;

		                        echo"<script>window.location.href='process.php';</script>";
							}

						?>

						<br>

	 	</div>
	 </div>


<!-- ******************************************************************** -->
	
<!-- ******************************************************************** -->

<div class="row">
	<div class="col-12 bg-dark">
		<div class="col-12 align-items-all p-2 text-white">
			<p>Upload your songs now at K600.00 only</p>
			<img class="p-2" width="50" src="img/whatsapp.png">
			<p>+265 999 358 339</p>
		</div>
	</div>	
</div>

<!-- ******************************************************************** -->
	
<!-- ******************************************************************** -->

			<?php

				if(isset($_POST['pn'])){
					$sid = $_POST['id'];
		      $_SESSION['play'] = $sid;

		      echo"<script>window.location.href='dancehall.php';</script>";
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
						<form action='dancehall.php' method='post' enctype='multipart/form-data' class='mx-auto'>
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
				echo"<script>window.location.href='dancehall.php';</script>";
			}

			?>
	
	</div>



<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
