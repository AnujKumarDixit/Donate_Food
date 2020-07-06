<?php
$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['user']) || empty($_POST['psw']))
	{
		$error="Username or Password is invalid";
	}
	else
	{
		$user=$_POST['user'];
		$psw=$_POST['psw'];
		$conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"food");
		$query=mysqli_query($conn,"SELECT * FROM register where uname='$user' AND password='$psw'");
		$rows=mysqli_num_rows($query);
		if($rows==1)
		{
			header("location:donate.php");
		}
		else
		{
			echo "Username or Password is Invalid.";
		}
		mysqli_close($conn);
	}
}
?>
