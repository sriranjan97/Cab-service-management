<html>             	
<body>
<?php
	#$con = mysql_connect("localhost","root","root123","cAAXISERVICE");
	$con = mysqli_connect("localhost","root","root123","cabservice");
	if($con->connect_error) {
		trigger_error("Database connection failed".$con->connect_error, E_USER_ERROR);
	}

	//$db="TAXISERVICE";
//	mysqli_select_db($db);
	$sql="INSERT INTO passenger VALUES ('$_POST[USER_ID]','$_POST[USER_NAME]','$_POST[TYPE]','$_POST[LOC_NAME]')";
	if ($con->query($sql)==TRUE)

	{
		echo "HURRAY!! ";
	}
	else {
		echo "PLEASE ENTER ALL THE DETAILS".$sql . "<br>" . $con->error;
	}
	$sql="INSERT INTO booking (P_ID,TYPE,LOC_NAME) VALUES ('$_POST[USER_ID]','$_POST[TYPE]','$_POST[LOC_NAME]')";
	
	if(mysqli_multi_query($con,$sql))
	{

		echo "   YOUR BOOKING IS CONFIRMED!";
	}


	mysqli_close($con)
	
?>


<br></br>
<br></br>
<button> <a href="./1.html"> back </a></button>
</body>               
</html>

