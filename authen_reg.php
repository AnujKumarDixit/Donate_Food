<?php
$user=filter_input(INPUT_POST, 'user');
$psw=filter_input(INPUT_POST, 'psw');
$servername = "localhost";
$username = "root";
$password = "";
$dbname="food";
$conn=new mysqli($servername, $username, $password,$dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	$sql="INSERT INTO register (uname, password)
	values('$user','$psw')";
	if($conn->query($sql)){
		header("location:login.php");
	}
	else
	{
		echo "Error:".$sql."<br>".$conn->error;
		header("location:reg.php");
	}
	$conn->close();
}
?>