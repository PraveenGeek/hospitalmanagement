
<?php
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender=$row["Gender"];
		
	}
}

?>
<link href="https://fonts.googleapis.com/css?family=Gentium+Basic" rel="stylesheet">

<style type="text/css">
	.helo{
		margin: 100px 320px;
		border-radius: 10px;
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#feffff+0,ddf1f9+35,a0d8ef+100;Blue+3D+%2318 */
background: #feffff; /* Old browsers */
background: -moz-linear-gradient(top, #feffff 0%, #ddf1f9 35%, #a0d8ef 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#a0d8ef',GradientType=0 ); /* IE6-9 */
font-family: 'Gentium Basic', serif;
opacity: 0.9;

	}
	.null{
		background-image: url(401985.jpg);
	}
</style>
<body background="hospital.jpg">
	<center>
		<div class="helo">
		<h1>Welcome:- <?php echo " "." ".$fname." ".$lname; ?></h1>
		<h1>Email:-<?php echo  " "." ".$email; ?></h1>
		<h1>Gender:-<?php echo " "." ".$gender; ?></h1>

	</div>
</center>
		<?php 
		include_once('bottom.html');
?>

</body>