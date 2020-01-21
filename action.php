<?php 
	include_once("connection.php");
	if(isset($_POST['docregister']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$nid=$_POST['nationalid'];
		$qua=$_POST['qualification'];
		$dept=$_POST['department'];
		$exp=$_POST['experience'];
		$caddress=$_POST['clinicaddress'];
		$ctime=$_POST['clinictiming'];
		$username=$_POST['username'];
		$password=$_POST['cpassword'];
		$sql="INSERT INTO doctor(Name,MobileNo,Emailid,Nationalid,Qualification,Experience,Department,ClinicAddress,ClinicTiming,Username,Password) VALUES('".$name."','".$mobile."','".$email."','".$nid."','".$qua."','".$dept."','".$exp."','".$caddress."','".$ctime."','".$username."','".$password."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "doctor-reg.php";
			
		}
		
	}
	
	
	else if(isset($_POST['userregister']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$nid=$_POST['nationalid'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="INSERT INTO user(Name,Mobile,Emailid,Nationalid,Age,Gender,Username,Password) VALUES('".$name."','".$mobile."','".$email."','".$nid."','".$age."','".$gender."','".$username."','".$password."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "user-reg.php";
			
		}
		
	}
	
	else if(isset($_POST['login']))
	{
		require_once "login.php";
	}
	
	else if(isset($_POST['logcheck']))
	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$sql="select name from doctor where Username='".$user."' and Password='".$pass."'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				require_once "doctorhome.php";
			}
		}
		else
		{
			$sql="select name from user where Username='".$user."' and Password='".$pass."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
					require_once "userhome.php";
				}
			}
		}	
	}		
?>
