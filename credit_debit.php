<?php
include("db_connect.php");
	$name = $_POST['name'];
	$card_no = $_POST['number'];
	$ccv = $_POST['security-code'];
	$date = $_POST['expiration-month-and-year'];
	echo $card_no, $ccv, $date;
	if(isset($name)&&isset($card_no)&&isset($ccv)){	
			$sql0 = "INSERT INTO credit_debit (name, card_no, ccv, date)VALUES ('$name', '$card_no', '$ccv', '$date')";
			if (mysqli_query($conn, $sql0)) {
				echo "Successful Payment";
			} /*else {
				echo "Fail: " . $sql0 . "<br/>" . mysqli_error($conn);
			}
		*/
	}
mysqli_close($conn);
?>
