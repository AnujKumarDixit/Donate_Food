<?php
$name=filter_input(INPUT_POST, 'name');
$contact=filter_input(INPUT_POST, 'contact');
$gender=filter_input(INPUT_POST, 'gender');
$address=filter_input(INPUT_POST, 'address');
$message=filter_input(INPUT_POST, 'message');
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
	$sql="INSERT INTO donate (name, contact, gender, address, city, state, message)
	values('$name','$contact','$gender','$address','Bengaluru','Karnataka','$message')";
	if($conn->query($sql)){
		header("location:home.php");
	}
	else
	{
		echo "Error:".$sql."<br>".$conn->error;
		header("location:donate.php");
	}
	$conn->close();
}
?>
