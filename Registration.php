<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="navbar">
	    <ul>
		    <li><a href="index.php">Home</a></li>
		    <li><a href="Login.php">Login</a>
			    <ul>
				     <li><a href="Registration.php">SignUp</a></li>
			     </ul>
		    </li>
		     
		    <li><a href="contact.html">Contact Us</a></li>
		    <li><a>About</a></li>
	    </ul>
    </div>
	<div class="loginbox">
		<h1>SIGN UP</h1>
		<form action="registration_code.php" method="POST">
			<p>Firstname</p>
			<input type="text" name="firstname" placeholder="Enter the Firstname" required id="firstname">
			<p>Lastname</p>
			<input type="text" name="lastname" placeholder="Enter lastname" required id="lastname">
			<p>Email</p>
			<input type="Email" name="email" placeholder="Enter mail" required id="email">
			<p> Password</p>
			<input type="password" name="password" placeholder="Enter the password" required id="pwd"><br>
			<p></p>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="submit" name="submit" value="SignUp">
		</form>
		<h3>Already have an account?<a href="Login.php"> Login</a></h3>
	</div>
</body>
</html>