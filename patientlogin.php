<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" type="text/css" href="patient.css">
</head>
<body>
	<div class="navbar" id="navbar1">
	    <ul>
		    <li><a href="index.php">Home</a></li>
		    <li><a href="Login.php">Login</a>
			    <ul>
				     <li><a href="Registration.php">SignUp</a></li>
			     </ul>
		    </li>
		     <li><a href="patientlogin.php">Patient</a></li>
		    <li><a href="contact.html">Contact Us</a></li>
		    <li><a href="get.php">Find</a></li>
	    </ul>
    </div>
	<div class="patient">
		<h1>PATIENT FORM</h1>
		<form action="patientadd.php" method="POST">
		    <p>PATIENT'S NAME</p>
		    <input type="text" name="pname" placeholder="Enter your name" required id="pname">
		    <p>PATIENT'S D.O.B</p>
		    <input type="text" name="pdob" placeholder="dd-mm-yyyy"  id="pdob">
		    <p>PATIENT'S AGE</p>
		    <input type="text" name="page" placeholder="Enter the age" id="page">
            <p>BLOOD GROUP (IF KNOWN)</p>
            <input type="text" name="pblood" placeholder="Enter the Blood Group" id="pblood">
            <p>FATHER'S/SPOUSE NAME</p>
            <input type="text" name="pfather"  placeholder="Enter the name"  id="pfather">
            <p>CONTACT PH.NO. FOR COMMUNICATION</p>
            <input type="text" name="pno" placeholder="Enter the Phone number" id="pno">
            <p>DISTRICT OF THE PATIENT</p>
            <input type="text" name="prel"  placeholder="Enter your district"  id="prel">
             <p></p>
			<input type="submit" name="submit" value="Add">
			<p></p>
			<input type="reset" name="reset" value="Cancel">
		</form>
	</div>
</body>
</html>