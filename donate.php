<html>
	<head>
		<link rel="stylesheet" href="nav.css">
		<title>Annapurna - Feeding societies</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			input[type=text]:focus {
    			border: 3px solid #8600b3;
			}
			.button {
			    background-color: #08F9F6; /* Green */
			    border: none;
			    color: white;
			    padding: 16px 32px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    -webkit-transition-duration: 0.4s; /* Safari */
			    transition-duration: 0.4s;
			    cursor: pointer;
			}
			.button:hover {background-color: #3e8e41}
			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
			}
			.container {
			    position: relative;
			    text-align: center;
			    color: white;
			}
			.centered {
			    position: absolute;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<header id="header">
				<div class="nav-holder">
					<nav id="navigation-bar" class="navbar-inverse navbar-fixed-top">
						<div class="header-top container logo" style="background-color:#950740">
							<a class="navbar-brand" href="#"><marquee><b>Annapurna</b></marquee></a>
							<a href="blog.php">
							<img src="images/logo.png" height=61 style="float:right">
							</a>
						</div>
						<font size="3">
						<ul class="nav navbar-nav">
		                    <li><a href="home.php">HOME</a></li>
		                    <li><a href="about.php">ABOUT US</a></li>
		                    <li><a href="about.php">CONTACT</a></li>
		                    <li><a href="blog.php">BLOG</a></li>
		                    <li style="float:right"><a href="login.php">LOGOUT</a></li>
	                	</ul>
	                	</font>
					</nav>
				</div>
			</header>
		</div>
		<br><br><br><br><br><br>
		<center><font style="color:#000000" size="6"><b>Welcome to Annapurna - Feeding Society</b></font>
			<br><br><br>			

<!--<?php
// define variables and set to empty values
$nameErr = $contactErr = $genderErr = $addressErr = "";
$name = $contact = $gender = $address =  $city = $state = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["contact"])) {
    $emailErr = "Contact is required";
  } else {
    $email = test_input($_POST["contact"]);
  }

  if (empty($_POST["gender"])) {
    $emailErr = "Contact is required";
  } else {
    $email = test_input($_POST["contact"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>-->
<center>
	<form action="authen_donate.php" method="POST">
	<div class="container">
			<img src="images/bg.jpg" border="2" height="500px" width="1050px">
			<div class="centered">
				<h1 style="color: #111111">Help!! End hunger today.</h1><br><br><br>
				<table>
				<tr>
				<TR>
				<TD><b style="color: #111111">NAME :</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="name" id="name" required autofocus placeholder=" Your name here" pattern="[a-zA-Z]{3,}" title="Please enter more than 3 letters">
				</TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">CONTACT NUMBER :</b></TD>
				<TD>
				<input type="text" name="contact" style="width:220px;height:25px;border-radius: 20px;" required placeholder=" Please enter your phone number"></TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">GENDER:</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="gender" id="gender" autofocus placeholder=" Your address here">
				</TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">ADDRESS:</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="address" id="address" required autofocus placeholder=" Your address here">
				</TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">CITY:</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="city" id="city" required autofocus placeholder=" Your address here">
				</TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">STATE:</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="state" id="state" required autofocus placeholder=" Your address here">
				</TD>
				</TR>
				<TR>
				<TD><b style="color: #111111">MESSAGE:</b></TD>
				<TD>
				<input type="text" style="width:220px;height:25px;border-radius: 20px;" name="message" id="message" autofocus placeholder=" Your address here">
				</TD>
				</TR>
				</TABLE>
				<br><br>
				<button class="button button2" style="vertical-align:right" type="submit"><b>BOOK</b></button></td></tr>
				</center>
				<p style="font-size: 20px; color: black">NOTE: Please fill city as "Bengaluru" and state as "Karnataka" since we are serving only in Bengaluru.</p>
				</div>
		</div>
</FORM>
			<br><br><br><br><br><br>
			<div class="footer">
				<p style="color:#000000"><font size="4">&copy Annapurna</font></p>
			</div>
		</center>
	</body>
<html>