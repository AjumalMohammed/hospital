<?php
include_once 'connection.php';
if (isset($_POST['submit']))
{
#-----------------------------change password for doctor and patient(user)-----------------------#
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sq="select * from doctor where username='".$username."' and email='".$email."'";
		$r=mysqli_query($conn,$sq);
		if(mysqli_num_rows($r)>0)
		{
			while($row1=mysqli_fetch_assoc($r))
			{
				
					$sql="UPDATE doctor SET password='".$password."' where username='".$username."'";
					if(mysqli_query($conn,$sql))
					{
						require_once "login.php";
					}
				
			}
		}
		else{
			$sq="select * from user where username='".$username."' and email='".$email."'";
			$r=mysqli_query($conn,$sq);
			if(mysqli_num_rows($r)>0)
			{
				while($row1=mysqli_fetch_assoc($r))
				{
					
						$sql="UPDATE user SET password='".$password."' where username='".$username."'";
						if(mysqli_query($conn,$sql))
						{
							require_once "login.php";
						}
						
					
				}
			}
			else
			{
				echo "username and email don't match";
			}
			mysqli_close($conn);
		}
	}
		
?>
