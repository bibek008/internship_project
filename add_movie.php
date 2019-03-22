<?php
include("db_connect.php");
	$Name = $_POST['Name'];
	$Language = $_POST['Language'];
	$Director = $_POST['Director'];
	$Genre = $_POST['Genre'];
	$Cast = $_POST['Cast'];
	if(isset($Name)){	
			$sql0 = "INSERT INTO movies (name, language, director, genre, cast)VALUES ('$Name', '$Language', '$Director', '$Genre', '$Cast')";
			if (mysqli_query($conn, $sql0)) {
				echo "ADDED MOVIES";
				echo "<script >alert('movies added');</script>";
			} /*else {
				echo "Fail: " . $sql0 . "<br/>" . mysqli_error($conn);
			}
		*/
	}
mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Insert a Movie</title>
<link href="css/style_add_movie.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">

<body>
		<!---header--->
		<div class="header">
			<h1>ADD A MOVIE</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main-content">
				<div class="contact-w3">

					<form action="add_movie.php" method="post">
						<label>Name</label>
						<input type="text" name="Name" placeholder="Movie name" required>
						<div class="row">
							<div class="contact-left-w3">
								<label>Language</label>
									<input type="text" name="Language" placeholder="Movie Language" required>
							</div>
							<div class="contact-right-w3l">
								<label>Director</label>
								<input type="text" name="Director" placeholder="Name" required>
							</div>
							<div class="clear"></div>
						</div>
						<label>Genre</label>
							<input type="text" name="Genre" placeholder="" required>
							
						<div class="row1">
							<label>Cast</label>
							<textarea placeholder="Cast" name="Cast"></textarea>
						</div>
						<input type="submit" value="ADD">
					</form>
				</div>
			</div>
			
		
</body>
</html>

