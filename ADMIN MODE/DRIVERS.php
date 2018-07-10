<html>             	
<body>
<?php
	
	$con = mysqli_connect("localhost","root","root123","cabservice");
	if($con->connect_error) {
		trigger_error("Database connection failed".$con->connect_error, E_USER_ERROR);
	}

	//$db="TAXISERVICE";
//	mysqli_select_db($db);
	$sql="SELECT * FROM driver";
	$res=$con->query($sql);
	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"<br>DRIVER ID: " . $row['DRIVER_ID'] . " <br> DRIVER NAME: " .$row['D_NAME']. " <br> DL NO: " .$row['DL_NO']. " <br> PHNO: " .$row['PHNO'] ."<br><br>";

		}
	}
	
	else {
		echo "SORRY RETRY".$sql . "<br>" . $con->error;
	}
	

	mysqli_close($con)
	
?>

<button> <a href="./ADMIN.html"> back </a></button>
</body>               
</html>
