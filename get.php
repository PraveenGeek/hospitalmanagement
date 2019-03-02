<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
	    <ul>
		    <li><a href="index.php">Home</a></li>
		     <li><a href="patientlogin.php">Patient</a></li>
		    <li><a href="Login.php">Login</a>
			    <ul>
				     <li><a href="Registration.php">SignUp</a></li>
			     </ul>
		    </li>
		    <li><a href="contact.html">Contact Us</a></li>
		    <li><a>Find</a></li>
	    </ul>
    </div>
	<div class="loginbox">
		<h1>LOGIN</h1>
		<form action="get_code.php" method="POST">
			<p>Patient Name</p>
			<input type="text" name="pname" placeholder="Enter Username" required id ="pname">
			<p>Patient number</p>
			<input type="text" name="pno" placeholder="Enter number" required id="pno"><br>
			<p></p>
			<input type="submit" value="Get">
			<input type="reset" name="reset" >
		</form>
		
	</div>
</body>
</html>