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
	$sql="SELECT D.D_NAME,D.DRIVER_ID,R.RATINGS FROM driver D, rating R WHERE D.DRIVER_ID=R.DRIVER_ID AND R.RATINGS=5";
	
	$res=$con->query($sql);
	
	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"<br> DRIVER NAME: " . $row['D_NAME'] . " <br> DRIVER ID: " .$row['DRIVER_ID']. " <br> STARS: " .$row['RATINGS'] . "<br><br>" ;

		}
	}
	else {
		echo "NO BOOKING MADE BY THIS USER_ID" . $con->error;
	}
	
	mysqli_close($con)

?>
<br></br>
<button> <a href="./ADMIN.html"> back </a></button>

</body>
</html>
