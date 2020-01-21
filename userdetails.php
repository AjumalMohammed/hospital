<!doctype html>
 <html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			function validate_form()
			{
				if !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
				  {
					alert("You have entered an invalid email address!")
					return (false)
				  }
			}
  </script>
  </head>
  <body class="banner6">
			<div class="navbar bg-info">
			<ul>
				<li><a href ="userhome.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				<li><a href="#">Appointments</a>
					<div class="submenu">
						<ul>
							<li><a href="bookappointments.php">Book Appointments</a></li>
							<li><a href="userviewappointments.php">View Appointments</a></li>
						</ul>
					</div>
				</li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>

  
		<div>
			
  <div class="container bg-light col-5">

							<!-----form section----->

            <form class="form-horizontal" name="myform" role="form" onsubmit="validate_form()" action="userreg1.php" method="post">
                <h2>Profile</h2>
				<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['id'];
		            $sql="select * from user where id=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
				
				
				
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" name="name" class="form-control " value="<?php echo $row['name'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="Age" class="col-sm-3 control-label" >Age</label>
                    <div class="col-sm-8">
                        <input type="text" id="Age" name="age" class="form-control " value="<?php echo $row['age'];?>" readonly name="age">
                    </div>
                </div>
				<div class="form-group">
                    <label for="gender" class="col-sm-3 control-label" >Gender</label>
                    <div class="col-sm-8">
                        <input type="text" id="gender" name="gender" class="form-control " value="<?php echo $row['gender'];?>" readonly name="gender">
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control"name="nationalid" value="<?php echo $row['nationalid'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" id="password" placeholder="Password" class="form-control"name="password" value="<?php echo $row['password'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                  
                 
					<?php
						}
					?>
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
       
 </body>
</html>