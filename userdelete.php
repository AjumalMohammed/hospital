	<!----query for admin to delete patient/user details------>

<?php
include_once 'connection.php';
$id=$_POST['id'];
if (isset($_POST['submit']))
{
	$sql="DELETE from user where id='".$id."'";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminuser.php";
	}
}
?>	