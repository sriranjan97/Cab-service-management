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
	$sql="SELECT * FROM BOOKING";
	$res=$con->query($sql);
	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"<br>BOOKING ID: " . $row['BOOK_ID'] . " <br> USER ID: " .$row['P_ID']. " <br> TYPE: " .$row['TYPE']. " <br> LOCATION: " .$row['LOC_NAME'] ."<br><br>";

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
