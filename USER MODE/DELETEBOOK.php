<html>             	
<body>
<?php
	#$con = mysql_connect("localhost","root","root123","TAXISERVICE");
	$con = mysqli_connect("localhost","root","root123","cabservice");
	if($con->connect_error) {
		trigger_error("Database connection failed".$con->connect_error, E_USER_ERROR);
	}
	//$db="TAXISERVICE";
//	mysqli_select_db($db);
	$sql="DELETE FROM BOOKING WHERE BOOK_ID='$_POST[BOOK_ID]'";
	if ($con->query($sql)==TRUE)

	{
		echo "BOOKING CANCELLED...HOPE YOU CHOOSE US AGAIN";
	}
	else {
		echo "SORRY COULD NOT CANCEL BOOKING. PLEASE TRY WITH A VALID BOOKING ID".$sql . "<br>" . $con->error;
	}
	
	mysqli_close($con)
	
?>
<br></br>
<br></br>
<button> <a href="./1.html"> back </a></button>
</body>               
</html>

