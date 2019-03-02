
<?php
include_once('back.php');
require_once('connection.php');

$pid=$_SESSION['pid'];
$pname=$pno= $page=$pfather=$prel=$pdob= '';
$sql = "SELECT * FROM tbluser1 WHERE Pid='$pid' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$pname = $row["Pname"];
		$pno = $row["Pno"];
		$page = $row["Page"];
        $prel = $row["Prel"];
        $pdob= $row["Pdob"];
        $pfather=$row["Pfather"];
        $pblood=$row["Pblood"];
	}
}

?>
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
	</style>
	<div class="helo"><center>
		<h1>Patient Name<br> <?php echo $pname; ?></h1>
		<h1>Patient no<br><?php echo $pno; ?></h1>
		<h1>Patient age<br><?php echo $page; ?></h1>
        <h1>Patient dob<br><?php echo $pdob; ?></h1>
        <h1>Patient Blood<br><?php echo $pblood; ?></h1>
        
		<h1>Patient father<br><?php echo $pfather; ?></h1>
		<h1>Patient district<br><?php echo $prel; ?></h1>
	
	
	</center>
</div>
