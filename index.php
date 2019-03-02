
<?php
include_once('Navigation.html');
?>
<html> 
<head> 
<style> 
.parallax { 
    background-image: url("holo.jpg"); 
    min-height: 500px;  
    background-attachment: fixed; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
} 
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
  font-family: 'arial';
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4d94ff;
}

</style> 
</head> 
<body>

<ul>
  <li><a class="active"  href="index.php">Home</a></li>
  <li><a href="Login.php">Login</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>


	<div class="parallax"></div> 
<div style="height:1000px;font-size:60px;"> 
<center>Hospital Management </center> 
</div> 
</body> 
</html> 