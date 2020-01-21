<?php
include("connection.php");
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];


//adminlogin

$sql="SELECT username FROM admin WHERE username='".$username."' and password='".$password."'";
$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			require_once "adminhome.php";
		}
	}


	//doctorlogin

	else 
	{
		$sql="SELECT * FROM doctor WHERE username='".$username."' and password='".$password."'";
        $result=mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result)>0)
	    {
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['status']!='Approved')
				{
					echo "application yet to be accepted";
				}
				else
				{
				session_start();
				$_SESSION['id']=$row['id'];
				require_once "doctorprofile.php";
			}
		}
	}	
		
		//userlogin

		else 
	    {
			
			$sql="SELECT * FROM user WHERE username='".$username."' and password='".$password."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION['id']=$row['id'];
					$_SESSION['username']=$row['username'];
				
					require_once "userhome.php";
				}
			}				
			else
			{
				echo "email or password incorrect";
			}
		}
	}
	
}
mysqli_close($conn);
?>