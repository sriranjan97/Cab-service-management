<html>             	
<body>
<?php
	session_start();
	#$con = mysql_connect("localhost","root","root123","TAXISERVICE");
	$con = mysqli_connect("localhost","root","root123","cabservice");
	if($con->connect_error) {
		trigger_error("Database connection failed".$con->connect_error, E_USER_ERROR);
	}
	//$db="TAXISERVICE";
	$user = $_SESSION['logged_user'];
	//mysqli_select_db($db);
	$sql="SELECT V.*, B.BOOK_ID FROM cab V, booking B WHERE B.TYPE =V.TYPE AND B.BOOK_ID= (SELECT BOOK_ID FROM BOOKING WHERE P_ID=".$user.")";
	$res=$con->query($sql);
	echo $user;

	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"<br> BOOKING ID:" . $row["BOOK_ID"]. " <br> TYPE:" .$row["TYPE"]. " <br>VEHICLE NUM: " .$row["VEHICLE_NO"] . "<br>  FARE/km: " .$row["FAREperKM"] . "<br> DRIVER ID: " .$row["DRIVER_ID"] ;
		
		}
	}
	else {
		echo "NO DETAILS AVAILABLE" . $con->error;
	}
	mysqli_close($con)
?>
<br></br>
<button> <a href="./VIEWDETAILS.php"> CLICK HERE TO GO BACK TO PREVIOUS PAGE </a></button>
<br></br>

<button> <a href="./1.html"> CLICK HERE TO GO TO HOME PAGE </a></button>
</body>               
</html>

