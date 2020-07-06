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
			.button {
			    background-color:#FF5733;
			    border: none;
			    color: white;
			    padding: 15px 32px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    -webkit-transition-duration: 0.4s; /* Safari */
			    transition-duration: 0.4s;
			    font-size: 15px;
			}
			.button1:hover {
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
	                	</ul>
	                	</font>
					</nav>
				</div>
			</header>
		</div>
		<br><br><br><br><br><br>
		<center><font style="color:#000000" size="6"><b>Welcome to Annapurna - Feeding Society</b></font>
			<br><br><br><br>
  			<div class="imgcontainer">
		    <img src="images/fd.jpg" height="250px" width="250px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <img src="images/donate.png" height="250px" width="250px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <img src="images/foodo.jpg" height="250px" width="250px">
		  	</div>
		  	<br>
		  	<form action="authen_login.php" method="POST">
			    <label for="usname"><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="user" required>
			    <br><br>
			    <label for="psw"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="psw" required>
			    <br><br>
			    <button type="submit" name="submit" class="button button1">LOGIN</button>
			    <br><br>
		    </form>
		    New User? Register <a href="reg.php">here</a>
			<br><br><br><br><br><br><br><br>
			<div class="footer">
				<p style="color:#000000"><font size="4">&copy Annapurna</font></p>
			</div>
		</center>
	</body>
</html>