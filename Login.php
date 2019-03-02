

<html>
<head>
	<style type="text/css">
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4d94ff;
}
	</style>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>

<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a class="active" href="Login.php">Login</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

    <div class="loginbox">
   
        <h1 >Login Here</h1>
        <form action="login_code.php" method="POST">
            <p>Username</p>
            <input type="text" name="email" placeholder="Enter Username" id="email" >
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" id="pwd" >
            <input type="submit" name="Login">
            <a href="Registration.php" onclick="func(0)">reg</a>
            
        </form>
        
    </div>

    <script type="text/javascript">
function func(k){
    return false;
}   
</script>
</body>
</head>
</html>