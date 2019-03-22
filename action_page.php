<?php
$uname = $_POST['uname'];
$psw = $_POST['psw'];
if( $uname == "admin" && $psw == "123"){
echo "<script type=\"text/javascript\">location.href = 'add_movie.php';</script>";
}
else{

	echo "<script type=\"text/javascript\">alert('Invalid Username or Password');</script>";
}
?>