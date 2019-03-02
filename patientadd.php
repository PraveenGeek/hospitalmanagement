<?php
require_once('patientlogin.php');
require_once('connection.php');
$pname = $pdob = $page = $pblood = $pfather = $padd = $pno= $prel='';

$pname = $_POST['pname'];
$pdob = $_POST['pdob'];
$page = $_POST['page'];
$pblood = $_POST['pblood'];
$pfather = $_POST['pfather'];

$pno=$_POST['pno'];
$prel = $_POST['prel'];



$sql = "INSERT INTO tbluser1 (Pname,Pdob,Page,Pblood,Pfather,Pno,Prel) VALUES ('$pname','$pdob','$page','$pblood','$pfather','$pno','$prel')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: get.php");
}
else
{
	echo "Error :".$sql;
}
?>