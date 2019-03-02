
<?php

require_once('connection.php');

$pname = $pno =  '';

$pname = $_POST['pname'];
$pno = $_POST['pno'];
$sql = "SELECT * FROM tbluser1 WHERE Pname='$pname' AND Pno='$pno'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$pid= $row["Pid"];
		$pno = $row["Pno"];
		session_start();
		$_SESSION['pid']=$pid;
		$_SESSION['pno']=$pno;
		
    }
	header("Location: dispaly.php");
}
else
{
	echo "Invalid email or password";
}
?>