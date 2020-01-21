
<!---------query for cancelling an appointment by user---->

<?php
include_once 'connection.php';
$id=$_POST['id'];
if (isset($_POST['submit']))
{
	$sql="DELETE from appointment where id='".$id."'";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "userviewappointments.php";
	}
}
?>	