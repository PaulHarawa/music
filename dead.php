<?php 

	include "conn.php";

	session_start();
	$username = $_SESSION['username'];
	if (!$username) {
		header("Location: 2001.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<title>Music DimenXion - upload music</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script src="Sweetalert/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="Sweetalert/dist/sweetalert2.min.css">
    <link href="icon2.png" rel="icon">

	<style type="text/css">
		.align-items-all{
			text-align: center;
		}
		.bg-dark-all{
			background-color: rgba(0, 0, 0, 0.8);
		}
	</style>
</head>
<body class="bg-dark-all">

	<div>
		<br>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="d-flex justify-content-between p-3">
				<form action="dead.php" method="POST"><button class="btn btn-primary" type="submit" name="logout">Log Out</button></form>
				<p class="text-primary text-uppercase"><?php echo "$username";?></p>
			</div>
			<?php

				if (isset($_POST['logout'])) {
					session_destroy();
					session_unset();
					header("Location:2001.php");
				}

			?>
		</div>
	</div>

	<div class="row">
			<div class="col-12">
				<div class="col-11 align-items-all text-dark">
				<h2 class="text-light">Add a song</h2>
				 <form action="dead.php" method="POST" enctype="multipart/form-data">					
					<input class="bg-secondary" type="file" name="file" required> <br><br>
					<input type="text" name="artist" placeholder="Name of artist" size="30" required> <br><br>
					<input type="text" name="title" placeholder="Title" size="30" required> <br><br>
					<input type="text" name="cat" placeholder="Category" size="30" required> <br><br>
					<input type="text" name="genre" placeholder="Genre" size="30" required> <br><br>
					<button class="btn btn-outline-primary" type="submit" name="upload">Upload</button>
				 </form>

				</div>
			</div>
		</div>	
		<?php

			if(isset($_POST['upload'])){
				$filename = $_FILES['file']['name'];
        		$tempname = $_FILES['file']['tmp_name'];
        		$destination = "uploads/".$filename;

        		$artist = $_POST['artist'];
        		$title = $_POST['title'];
        		$cat = $_POST['cat'];
        		$genre = $_POST['genre'];

        		$date = date("y-m-d");
        		$time = date("h:i");

        		$sql = "INSERT INTO songs(file,artist,title,date,time,downloads,cat,genre) VALUES('$filename','$artist','$title','$date','$time','0','$cat','$genre')";
        		$result = mysqli_query($conn,$sql);

        		if($result){
        			move_uploaded_file($tempname, $destination);
        			echo "<script>
                                Swal.fire({
                                    title: 'Admin',
                                    text: 'Song uploaded successfully',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                    }).then((result) => {
                                    if (result.isConfirmed) {

                                            window.location.href='dead.php';
                                                }
                                            })
                        </script>";
        		}

			}

		?>

	<div>
		<br><br>
	</div>

	<div class="row">
			<div class="col-12">
				<div class="col-11 align-items-all text-dark">
				<h2 class="text-light">Artist Of The Week</h2>
				 <form action="dead.php" method="POST" enctype="multipart/form-data">	<input class="bg-secondary" type="file" name="file" required> <br>	 <br>
					<input type="text" name="artist" placeholder="Name of artist" size="30" required> <br><br>
					<textarea name="story" placeholder="Story" rows="7" style="width: 250px;"></textarea> <br><br>
					<input type="text" name="genre" placeholder="Genre" size="30" required> <br><br>
					<input type="text" name="question" placeholder="Question" size="30" required> <br><br>
					<button class="btn btn-outline-primary" type="submit" name="set">Upload</button>
				 </form>

				</div>
			</div>
		</div>	

		<?php

			if (isset($_POST['set'])) {
				$filename = $_FILES['file']['name'];
        		$tempname = $_FILES['file']['tmp_name'];
        		$destination = "img/aotw/".$filename;


				$artist = $_POST['artist'];
				$story = $_POST['story'];
				$genre = $_POST['genre'];
				$question = $_POST['question'];

				$sqle = "SELECT * FROM week";
				$resulte = mysqli_query($conn,$sqle);
				if(mysqli_num_rows($resulte)>0){

				$sql = "UPDATE week SET artist='$artist',story='$story',genre='$genre',question='$question',image='$filename'";
				$result = mysqli_query($conn,$sql);

				if ($result) {
					move_uploaded_file($tempname, $destination);
					echo "<script>
                                Swal.fire({
                                    title: 'Admin',
                                    text: 'AOTW updated successfully',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                    }).then((result) => {
                                    if (result.isConfirmed) {

                                            window.location.href='dead.php';
                                                }
                                            })
                        </script>";
				}
				else{
					echo"<p class='text-danger'>Error!!!!!!!!!!!!!!</p>";
				}}
				else{
					$sqld = "INSERT INTO week(artist,story,genre,question,image) VALUES('$artist','$story','$genre','$question','$filename')";
					$resultd = mysqli_query($conn,$sqld);

					if ($resultd) {
					move_uploaded_file($tempname, $destination);
					echo "<script>
                                Swal.fire({
                                    title: 'Admin',
                                    text: 'AOTW updated successfully',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                    }).then((result) => {
                                    if (result.isConfirmed) {

                                            window.location.href='dead.php';
                                                }
                                            })
                        </script>";
				}
				else{
					echo"<p class='text-danger'>Error!!!!!!!!!!!!!!</p>";
				}
				}
			}

		?>

	<div>
		<br><br>
	</div>

	
</body>
</html>