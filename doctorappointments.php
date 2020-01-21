<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body class="banner3"> 
		<div class="navbar bg-info">
			<ul>
				<li><a href ="doctorprofile.php">Home</a></li>
				<li><a href="doctordetails.php">My Profile</a></li>
				<li><a href="#">View Appointments</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
  </body>
  
			<div class="card" style="">
  <div class="card-body">
  
  <table class="table table-striped card-text bg-light">
  <thead>
			
		<!--------header section-------->

    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col">Status</th>
	 
    
    </tr>
	
	
  </thead>
				<!------query for doctors view booked appointments by users---->
			
		<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['id'];
		            $sql="select * from appointment where id=$var";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
			<!---------view appointments details------>


  <tbody>
    <tr>
      <form action="doctorapprove1.php" method="POST">  
      <td><input type="text" class="bg-light form-control" name="username" value="<?php echo $row['username'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>
	  <td><input type="date" class="bg-light form-control" name="date" value="<?php echo $row['date'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="slot" value="<?php echo $row['slot'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="status" value="<?php echo $row['status'];?>" readonly></td>
		
	  <td><input type="submit" value="Confirm" name="submit" class="btn-info">
	  </form>
    </tr>
	
	
	</tbody>
	
	<?php
		}
	?>
	
	</table>
	</div></div>
	</div>
</html>