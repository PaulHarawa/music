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
	<title>Music Pablo</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="assets/vendor/glightbox/css/glightbox.css" rel="stylesheet">
	<link href="icon2.png" rel="icon">

	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		body{
			background-image: url(img/bg-44.jpg);
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			background-repeat: no-repeat;
		}
		.bg-white-all{
			background-color: #F1F3F4;
		}
		.bg-white-all-xxx{
			background-image: linear-gradient(to right,#F1F3F4,#F1F3F4,#0D6EA7);
			border: none;
		}
		.bg-white-all-xxxy{
			background-image: linear-gradient(to right,#0D6EA7,#F1F3F4,#0D6EA7);
			border: none;
		}
		.bg-white-all-xxxyy{
			background: transparent;
			border: none;
		}
		.align-items-all{
			text-align: center;
		}
		.bg-dark-all{
			background-color: rgba(0, 0, 0, 0.7);
		}
		.img-edit{
			width: 280px;
			height: 290px;
			border: 1px solid blue;
			border-radius: 10px;
		}
		.edit-e{
			border-radius: 50%;
			border: 1px solid blue;
		}
		.edit-b{
			border-radius: 50%;
		}
		.float-now{
			float: left;
		}
		.bg-new-x{
			background-color: rgba(0, 0, 0, 0.7);
		}
		.bg-new-xy{
			background-image: linear-gradient(to right,rgba(0, 0, 0,0.4),rgba(0, 0, 0, 0.1),rgba(0, 0, 0,0.4));
		}
		.text-left-all{
			text-align: left;
		}
		.bg-big{
			background-image: linear-gradient(rgb(92, 92, 92),rgba(0,0,0,0.8));
		}
		nav .collapse .nav-item .nav-link{
			color: white;
			font-family: verdana;
		}
		nav .collapse .nav-item .nav-link:hover{
			color: rgb(13, 110, 198);
		}
		.top10n{
			font-family: monospace;
			text-transform: uppercase;
			font-size: 22px;
			padding-left: 20px;
		}
		.top10nn{
			font-family: monospace;
			text-transform: uppercase;
			font-size: 22px;
			padding-left: 10px;
			color: white;
		}
		.topten-section{
			padding: 5px;
			margin: 0px 20px 0px 20px;
			background-color: rgba(0, 0, 0, 0.2);
		}
		.topten-section1{
			padding-top: 20px;
			margin: 10px 20px 0px 20px;
			background-color: rgba(0, 0, 0, 0.2);
			border: 1px solid rgba(215, 225, 244,0.3);
		}
		.top10y{
			font-family: monospace;
			text-transform: capitalize;
			font-size: 20px;
			padding-left: 30px;
		}
		.top10yy{
			padding-left: 20px;
		}
		.top10yyy{
			font-size: 15px;
		}
	</style>
</head>
<body>
	<!-- ******************************************************************** -->
		 <div class="row bg-dark">
		  <nav class="col-12 navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Fourth navbar example">
		    <div class="container-fluid">
		      <a class="navbar-brand" href="index.php"><strong>Music Pablo</strong></a>
		      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		  </button>

		      <div class="collapse navbar-collapse" id="navbarsExample05">
		        <ul class="navbar-nav mx-auto mb-2 mb-md-0">
		          <li class="nav-item p-2 hoverx" onclick="closeNav()">
		            <a class="nav-link" href="#top10">TopTen</a>
		          </li>
		          <li class="nav-item p-2 hoverx" onclick="closeNav()">
		            <a class="nav-link" href="#new">Trending</a>
		          </li>
		          <li class="nav-item p-2 hoverx dropdown">
		            <a class="nav-link dropdown-toggle px-2 text-whitey" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Genre</a>
		            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow" aria-labelledby="dropdown03" style="width: 220px;">
					    <li><a class="dropdown-item text-whiteyy" title="details" href="hiphop.php">Hip Hop</a></li>
					    <li><a class="dropdown-item text-whiteyy" title="details" href="dancehall.php">Dance Hall</a></li>
					    <li><a class="dropdown-item text-whiteyy" title="details" href="afro.php">Afro Pop</a></li>
					  </ul>
		          </li>
		        </ul>
		        <form class="d-flex" action="search.php" method="POST">
		          <input class="form-control bg-dark text-secondary border-secondary" type="text" placeholder="Artist's name" aria-label="Search" name="term" required>
		          <div>&nbsp;</div>
		          <button class="btn btn-sm btn-primary" type="submit" name="search">Search</button>
		        </form>
		      </div>
		    </div>
		  </nav>

		  <div class="col-12 bg-dark">
		  	<br>
		  </div>

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

	<?php

		if (isset($_POST['1'])) {
			$_SESSION['download'] = '1';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['A'])) {
			$_SESSION['download'] = 'A';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['B'])) {
			$_SESSION['download'] = 'B';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['C'])) {
			$_SESSION['download'] = 'C';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['D'])) {
			$_SESSION['download'] = 'D';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['E'])) {
			$_SESSION['download'] = 'E';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['F'])) {
			$_SESSION['download'] = 'F';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['G'])) {
			$_SESSION['download'] = 'G';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['H'])) {
			$_SESSION['download'] = 'H';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['I'])) {
			$_SESSION['download'] = 'I';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['J'])) {
			$_SESSION['download'] = 'J';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['K'])) {
			$_SESSION['download'] = 'K';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['L'])) {
			$_SESSION['download'] = 'L';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['M'])) {
			$_SESSION['download'] = 'M';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['N'])) {
			$_SESSION['download'] = 'N';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['O'])) {
			$_SESSION['download'] = 'O';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['P'])) {
			$_SESSION['download'] = 'P';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['Q'])) {
			$_SESSION['download'] = 'Q';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['R'])) {
			$_SESSION['download'] = 'R';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['S'])) {
			$_SESSION['download'] = 'S';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['T'])) {
			$_SESSION['download'] = 'T';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['U'])) {
			$_SESSION['download'] = 'U';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['V'])) {
			$_SESSION['download'] = 'V';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['W'])) {
			$_SESSION['download'] = 'W';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['X'])) {
			$_SESSION['download'] = 'X';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['Y'])) {
			$_SESSION['download'] = 'Y';
			echo"<script>window.location.href='download.php';</script>";
		}
		elseif (isset($_POST['Z'])) {
			$_SESSION['download'] = 'Z';
			echo"<script>window.location.href='download.php';</script>";
		}

	?>

<!-- ******************************************************************** -->
		
<!-- ******************************************************************** -->

	 	<div class="row bg-new-x bg-new-xy">
	 		<br>
		 <div id="myCarousel" class="carousel slide col-12 p-0" data-bs-ride="carousel">
		    <div class="carousel-indicators">
		      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		    </div>
		    <div class="carousel-inner">
		      <div class="carousel-item active">

		        <div class="container">
		          <div class="carousel-caption">
		          	<?php 
		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$image = $row['image'];
		            	echo"<image src='img/aotw/$image' class='img-edit'>";
			        	?>
		            <?php 

		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$artist = $row['artist'];
		            	echo"<br><br><span class='text-uppercase'>$artist</span>";	?>
		        		<h4>Artist of the Week</h4><a href="aotw.php" data-glightbox="type: external" class="portfolio-lightbox preview-link" title="details"><button class="btn btn-md btn-primary"><i>Listen Now</i></button></i></a>
		          </div>
		        </div>
		      </div>
		      <div class="carousel-item">

		        <div class="container">
		          <div class="carousel-caption">
		          	<?php 
		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$image = $row['image'];
		            	echo"<image src='img/aotw/$image' class='img-edit'>";
			        	?>
		            
		            <p><br>Get to know the work of this <?php 

		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$genre = $row['genre'];
		            	echo"$genre";

		        	?> artist.</p>
		            <a href="aotw.php" data-glightbox="type: external" class="portfolio-lightbox preview-link" title="details"><button class="btn btn-md btn-primary"><i>Listen Now</i></button></i></a>
		          </div>
		        </div>
		      </div>
		      <div class="carousel-item">

		        <div class="container">
		          <div class="carousel-caption">
		          	<?php 
		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$image = $row['image'];
		            	echo"<image src='img/aotw/$image' class='img-edit'>";
			        	?>
		            <p><?php 

		            $sql = "SELECT * FROM week";
		            $result = mysqli_query($conn,$sql);
		            $row= mysqli_fetch_array($result);
		            	$question = $row['question'];
		            	echo"<br>$question ?";

		        	?></p>
		        	<a href="aotw.php" data-glightbox="type: external" class="portfolio-lightbox preview-link" title="details"><button class="btn btn-md btn-primary"><i>Listen Now</i></button></i></a>
		          </div>
		        </div>
		      </div>
		    </div>
		    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="visually-hidden">Previous</span>
		    </button>
		    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="visually-hidden">Next</span>
		    </button>
		    <span id="top10"></span>
	  </div>
	</div>

  <!-- ******************************************************************** -->
	  
	<!-- ******************************************************************** -->

	<div class="row">
		<div class="col-12 bg-dark text-white">
			<br>
			<h1 class="col-12 p-2 align-items-all"><b>TOP10</b></h1>
			<br>
			<div class="col-10 col-lg-4 topten-section mx-auto">
				<h2 class="top10n">All Genres</h2>
				<br>
				<?php

					$today = date("y-m-d");
					$date=date_create("$today");
					date_sub($date,date_interval_create_from_date_string("365 days"));
					$adate = date_format($date,"y-m-d");

					$sql = "SELECT * FROM songs WHERE date>='$adate' ORDER BY downloads DESC";
					$result = mysqli_query($conn,$sql);

					$count = 1;

					while($count<=10){
					  $row=mysqli_fetch_array($result);
						$id = $row['id'];
						$file = $row['file'];
						$artist = $row['artist'];
						$title = $row['title'];
						$date =$row['date'];
						$time = $row['time'];
						$downloads = $row['downloads'];

						echo"<div class='col-12'>
								<div class='col-12'>
									<h5 class='top10y'>$count : $artist - $title</h5>
								</div>
								<div class='d-inline-flex col-12 top10yy'>
									<div class='p-2'>
									 <form action='index.php' method='post' enctype='multipart/form-data'>
									 	<button type='submit' class='btn btn-sm btn-outline-primary' name='pn'><i class='fa fa-play'></i></button>
										<button type='submit' class='btn btn-sm btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
										<input type='radio' value='$id' name='id' checked hidden>
									 </form>
									</div>
									<div class='p-2'>
										<p class='top10yyy'><i>$downloads downloads</i></p>
									</div>
								</div>
							</div>
							<br><br>";

							$count++;
					}


				?>
			</div>

			<span id="new"></span>
			<br><br>

		</div>
	</div>

	<!-- ******************************************************************** -->
	  
	<!-- ******************************************************************** -->

	<div class="row">
		<div class="col-12 bg-dark-all p-4">
			<br>
				<h1 class="col-12 p-2 align-items-all text-white"><b>TRENDING</b></h1>
			<br>

			<div class="col-12 d-md-inline-flex">
				<div class="col-10 col-md-3 topten-section1 mx-auto">
					<h2 class="top10nn">Hip Hop</h2>

					<?php

						$today = date("y-m-d");
						$date=date_create("$today");
						date_sub($date,date_interval_create_from_date_string("365 days"));
						$adate = date_format($date,"y-m-d");

						$sql = "SELECT * FROM songs WHERE date>='$adate' AND genre='HipHop' ORDER BY id DESC";
						$result = mysqli_query($conn,$sql);

						$count = 1;

						while($count<=5){
						  $row=mysqli_fetch_array($result);
							$id = $row['id'];
							$file = $row['file'];
							$artist = $row['artist'];
							$title = $row['title'];
							$date =$row['date'];
							$time = $row['time'];
							$downloads = $row['downloads'];

							echo"<div class='col-12 p-2 d-sm-inline-block text-left-all'>
						          <div class='card shadow-sm bg-white-all-xxx'>
						            <div class='card-body'>
						              <p class='card-text'><b>$artist - $title</b></p>
						              <div class='d-flex justify-content-between align-items-center'>
						                <div class='btn-group'>
						                 <form action='index.php' method='post' enctype='multipart/form-data'>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='pn'><i class='fa fa-play'></i></button>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
						                   <input type='radio' value='$id' name='id' checked hidden>
										 				 </form>
						                </div>
						              </div>
						            </div>
						          </div>
						        </div>

						        ";

								$count++;
						}


					?>
				</div>
				<div class="col-10 col-md-3 topten-section1 mx-auto">
					<h2 class="top10nn">Dance Hall</h2>

					<?php

						$today = date("y-m-d");
						$date=date_create("$today");
						date_sub($date,date_interval_create_from_date_string("365 days"));
						$adate = date_format($date,"y-m-d");

						$sql = "SELECT * FROM songs WHERE date>='$adate' AND genre='DanceHall' ORDER BY id DESC";
						$result = mysqli_query($conn,$sql);

						$count = 1;

						while($count<=5){
						  $row=mysqli_fetch_array($result);
							$id = $row['id'];
							$file = $row['file'];
							$artist = $row['artist'];
							$title = $row['title'];
							$date =$row['date'];
							$time = $row['time'];
							$downloads = $row['downloads'];

							echo"<div class='col-12 p-2 d-sm-inline-block text-left-all'>
						          <div class='card shadow-sm bg-white-all-xxx'>
						            <div class='card-body'>
						              <p class='card-text'><b>$artist - $title</b></p>
						              <div class='d-flex justify-content-between align-items-center'>
						                <div class='btn-group'>
						                 <form action='index.php' method='post' enctype='multipart/form-data'>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='pn'><i class='fa fa-play'></i></button>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
						                   <input type='radio' value='$id' name='id' checked hidden>
										 				 </form>
						                </div>
						              </div>
						            </div>
						          </div>
						        </div>

						        ";

								$count++;
						}


					?>
				</div>
				<div class="col-10 col-md-3 topten-section1 mx-auto">
					<h2 class="top10nn">Afro Pop</h2>

					<?php

						$today = date("y-m-d");
						$date=date_create("$today");
						date_sub($date,date_interval_create_from_date_string("365 days"));
						$adate = date_format($date,"y-m-d");

						$sql = "SELECT * FROM songs WHERE date>='$adate' AND genre='Afro' ORDER BY id DESC";
						$result = mysqli_query($conn,$sql);

						$count = 1;

						while($count<=5){
						  $row=mysqli_fetch_array($result);
							$id = $row['id'];
							$file = $row['file'];
							$artist = $row['artist'];
							$title = $row['title'];
							$date =$row['date'];
							$time = $row['time'];
							$downloads = $row['downloads'];

							echo"<div class='col-12 p-2 d-sm-inline-block text-left-all'>
						          <div class='card shadow-sm bg-white-all-xxx'>
						            <div class='card-body'>
						              <p class='card-text'><b>$artist - $title</b></p>
						              <div class='d-flex justify-content-between align-items-center'>
						                <div class='btn-group'>
						                 <form action='index.php' method='post' enctype='multipart/form-data'>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='pn'><i class='fa fa-play'></i></button>
						                  <button type='submit' type='button' class='btn btn-sm btn-outline-primary' name='dn'><i class='fa fa-download'></i></button>
						                   <input type='radio' value='$id' name='id' checked hidden>
										 				 </form>
						                </div>
						              </div>
						            </div>
						          </div>
						        </div>

						        ";

								$count++;
						}


					?>
				</div>
		</div>
					
		</div>
	</div>

<br>

  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <?php

				if(isset($_POST['dn'])){
					$sid = $_POST['id'];
		                     $_SESSION['sid'] = $sid;

		                     echo"<script>window.location.href='p.php';</script>";
				}

			?>
	<?php

				if(isset($_POST['pn'])){
					$sid = $_POST['id'];
		      $_SESSION['play'] = $sid;

		      echo"<script>window.location.href='index.php';</script>";
				}

			?>

			<?php

				if (isset($_SESSION['play'])) {

						$pid = $_SESSION['play'];

				    $sql = "SELECT * FROM songs WHERE id='$pid'";
				    $result = mysqli_query($conn,$sql);

				    $row = mysqli_fetch_array($result);

				    $sname = $row['file'];

					echo"
					<div class='row p-0'>	
					<nav class='col-12 navbar navbar-dark bg-white-all-xxxyy fixed-bottom' aria-label='Fourth navbar example'>
						<div class='container-fluid p-1'>

							<audio autobuffer autoloop loop controls autoplay class='mx-auto edit-e'>
									<source src='uploads/$sname'>
							</audio>
						</div>
						<form action='index.php' method='post' enctype='multipart/form-data' class='mx-auto'>
				          <button type='submit' type='button' class='btn btn-danger edit-b' name='stop'>stop</button>
				           <input type='radio' value='$id' name='id' checked hidden>
							</form>
  				</nav>
  				</div>
					";
				}

			?>

			<?php

			if(isset($_POST['stop'])){
				session_destroy();
				session_unset();
				echo"<script>window.location.href='index.php';</script>";
			}

			?>

	<script type="text/javascript">
		function closeNav(){
				document.querySelector("button.navbar-toggler").click();
		}
	</script>

<div class="row">
	<div class="col-12 bg-dark">
		<div class="col-12 align-items-all p-2 text-white">
			<p>Upload your songs now at <b>K600.00</b> only</p>
			<img class="p-2" width="50" src="img/whatsapp.png">
			<p>+265 999 358 339</p>
		</div>
	</div>	
</div>
</body>
</html>
