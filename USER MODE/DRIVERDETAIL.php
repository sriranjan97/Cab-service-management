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
	$sql="SELECT B.BOOK_ID,D.*,R.RATINGS FROM BOOKING B,RATING R,DRIVER D,cab V WHERE V.TYPE=B.TYPE AND D.DRIVER_ID=V.DRIVER_ID AND V.DRIVER_ID=R.DRIVER_ID AND B.BOOK_ID = (SELECT BOOK_ID FROM BOOKING WHERE P_ID=".$user.")";
	$res=$con->query($sql);
	echo $user;

	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"<br> BOOKING ID:" . $row["BOOK_ID"]. " <br> DRIVER ID" .$row["DRIVER_ID"]. " <br> DRIVER NAME: " .$row["D_NAME"] . "<br>  DRIVER PHNO: " .$row["PHNO"] . "<br> RATING " .$row["RATINGS"] ;
		
		}
	}
	else {
		echo "NO DETAILS AVAILABLE" . $con->error;
	}
	mysqli_close($con)
?>
<br></br>
<button> <a href="./VIEWDETAILS.html"> CLICK HERE TO GO BACK TO PREVIOUS PAGE </a></button>
<br></br>

<button> <a href="./1.html"> CLICK HERE TO GO TO HOME PAGE </a></button>
</body>               
</html>

