<!-------------query for admin approval on doctors registration-------->

<?php
include_once 'connection.php';
$name=$_POST['name'];
if (isset($_POST['submit']))
{
	$sql="UPDATE doctor SET status='Approved' where name='".$name."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminhome.php";
	}
}
else if (isset($_POST['reject']))
{
	$sql="UPDATE doctor SET status='pending' where name='".$name."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminhome.php";
	}
}
?>	
