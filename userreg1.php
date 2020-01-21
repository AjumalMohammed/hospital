

		<!-------query for user registration------>

<?php
include_once 'connection.php';
$id=$_POST['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$nationalid=$_POST['nationalid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
	$sq="select * from user";
	$r=mysqli_query($conn,$sq);
	$flag=0;
	while($row=mysqli_fetch_assoc($r))
	{
		if($row['username']==$username)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		echo "Already existing username";
		mysqli_close($conn);
	}
	else
	{
		$sql="INSERT INTO user(id,name,mobile,email,nationalid,age,gender,username,password)VALUES('".$id."','".$name."','".$mobile."','".$email."','".$nationalid."','".$age."','".$gender."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('there was an error running the query['.$conn->error.']');
		}
		else
		{
			require_once "login.php";
		}
	
}
}

?>	
