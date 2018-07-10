<html>             	
<body>


<?php
	session_start();
	#$con = mysql_connect("localhost","root","root123","TAXISERVICE");
	$con = mysqli_connect("localhost","root","root123","cabservice");
	if($con->connect_error) {
		trigger_error("Database connection failed".$con->connect_error, E_USER_ERROR);
	}
	else{
		// echo "connected";
	}
	//$db="TAXISERVICE";
//	mysqli_select_db($db);
	$sql="UPDATE cab SET FAREperKM='$_POST[FAREperKM]' WHERE TYPE =  '$_POST[TYPE]' " ;

	$res=$con->query($sql);
	
if ($con->query($sql)==TRUE)

	{
		echo "UPDATED SUCCESSFULLY ";
	}
	else {
		echo "SORRY COULD NOT UPDATE. ".$sql . "<br>" . $con->error;
	}
		mysqli_close($con)

?>

<br></br>
<br></br>
<button> <a href="./ADMIN.html"> back </a></button>
</body>
</html>