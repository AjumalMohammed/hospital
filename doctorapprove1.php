<!-----query for doctors to approve appointment------>

<?php
include_once 'connection.php';
$username=$_POST['username'];
if (isset($_POST['submit']))
{
	$sql="UPDATE appointment SET status='Approved' where username='".$username."'";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "doctorappointments.php";
	}
}
?>	
