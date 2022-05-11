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
	<title>Music Pablo - download</title>

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
		<div class="col-12 bg-dark-all p-0">
			<br>
				<h3 class="col-12 p-2 align-items-all text-warning"><?php

					$download = $_SESSION['download'];

					if($download=='1'){
						echo"<b>#</b>";
					}
					elseif ($download=='A') {
						echo"<b>A</b>";
					}
					elseif ($download=='B') {
						echo"<b>B</b>";
					}
					elseif ($download=='C') {
						echo"<b>C</b>";
					}
					elseif ($download=='D') {
						echo"<b>D</b>";
					}
					elseif ($download=='E') {
						echo"<b>E</b>";
					}
					elseif ($download=='F') {
						echo"<b>F</b>";
					}
					elseif ($download=='G') {
						echo"<b>G</b>";
					}
					elseif ($download=='H') {
						echo"<b>H</b>";
					}
					elseif ($download=='I') {
						echo"<b>I</b>";
					}
					elseif ($download=='J') {
						echo"<b>J</b>";
					}
					elseif ($download=='K') {
						echo"<b>K</b>";
					}
					elseif ($download=='L') {
						echo"<b>L</b>";
					}
					elseif ($download=='M') {
						echo"<b>M</b>";
					}
					elseif ($download=='N') {
						echo"<b>N</b>";
					}
					elseif ($download=='O') {
						echo"<b>O</b>";
					}
					elseif ($download=='P') {
						echo"<b>P</b>";
					}
					elseif ($download=='Q') {
						echo"<b>Q</b>";
					}
					elseif ($download=='R') {
						echo"<b>R</b>";
					}

					elseif ($download=='S') {
						echo"<b>S</b>";
					}
					elseif ($download=='T') {
						echo"<b>T</b>";
					}
					elseif ($download=='U') {
						echo"<b>U</b>";
					}
					elseif ($download=='V') {
						echo"<b>V</b>";
					}

					elseif ($download=='W') {
						echo"<b>W</b>";
					}
					elseif ($download=='X') {
						echo"<b>X</b>";
					}
					elseif ($download=='Y') {
						echo"<b>Y</b>";
					}
					elseif ($download=='Z') {
						echo"<b>Z</b>";
					}

				?> <i class="h5 text-white"> - archive</i>
				</h3>

				<?php 
				  if($download=='1'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='#' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12'>
									<h2>No Music Of This Category Found.</h2>
								</div>

							</div>";
						}
					}

					elseif($download=='A'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='A' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='B'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='B' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='C'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='C' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='D'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='D' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}


					elseif($download=='E'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='E' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='F'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='F' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='G'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='G' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='H'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='H' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='I'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='I' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='J'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='J' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='K'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='K' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='L'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='L' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='M'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='M' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}


					elseif($download=='N'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='N' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='O'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='O' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='P'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='P' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='Q'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='Q' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='R'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='R' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}


					elseif($download=='S'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='S' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='T'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='T' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='U'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='U' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='V'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='V' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='W'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='W' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='X'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='X' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}


					elseif($download=='Y'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='Y' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
								</div>

							</div>";
						}
					}

					elseif($download=='Z'){
					$sql = "SELECT DISTINCT artist FROM songs WHERE cat='Z' ORDER BY artist";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)) {
								$artist = $row['artist'];

								echo"

								<div class='col-12 p-3 mx-auto'>
		                			<form action='download.php' method='post' enctype='multipart/form-data' class='text-center'>
		                  				<button type='submit' class='btn btn-outline-primary btn-dn' name='dn'><span class=''>$artist</span></button>
		                  				<input type='radio' value='$artist' name='id' checked hidden>
		                  			</form>
						        </div>

								";
							}
						}
						else{
							echo "<div class='row'>

								<div class='col-12 text-center text-warning'>
									<h4>No Music Of This Category Found.</h4>
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

                        echo"<script>window.location.href='process.php';</script>";
					}

				?>

</body>
</html>
