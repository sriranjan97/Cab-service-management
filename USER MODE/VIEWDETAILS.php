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
	$sql="SELECT * FROM BOOKING WHERE P_ID = ".$_POST['USER_ID'];
	$_SESSION['logged_user'] = $_POST['USER_ID'];
	$res=$con->query($sql);
	
	if ($res->num_rows>0)
	{
		while($row=$res->fetch_assoc()) 
		{
			echo"BOOKING ID: " . $row['BOOK_ID'] . " <br> PASSENGER_ID: " .$row['P_ID']. " <br> TYPE: " .$row['TYPE']. " <br> LOCATION: " .$row['LOC_NAME'] ;

		}
	}
	else {
		echo "NO BOOKING MADE BY THIS USER_ID" . $con->error;
	}
	
	mysqli_close($con)

?>

<form action="p11b.php"	method="post">

<input type="text" value="<?php echo $_POST['USER_ID'];?>">
	
<input type="submit" value="GET YOUR VEHICLE DETAILS">
	<br></br>
	

	</table>  </form>



	
<br></br>

<form action="DRIVERDETAIL.php"	method="post">

<input type="text" value="<?php echo $_POST['USER_ID'];?>">
	
<input type="submit" value="GET THE DRIVER DETAILS">
	<br></br>
	

	</table>  </form>

	<br></br>

<style>

button
{

}
</style>
<button> <a href="./1.html"> back </a></button>
</body>               
</html>

