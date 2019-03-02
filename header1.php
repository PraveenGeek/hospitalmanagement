
<?php
session_start();
$email = $_SESSION['email'];
?>

<style type="text/css">
.example_b {
color: #fff ;
text-transform: uppercase;
background: #60a3bc;
padding:12px;
border-radius: 50px;
display: inline-block;
border: none;
margin-right: 1270px;
}
.example_b:hover {
text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
</style><div class="button_cont" align="center"><a class="example_b" href="logout.php" target="_blank" rel="nofollow noopener">Logout</a></div>