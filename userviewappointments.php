<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar bg-info">
			<ul>
				<li><a href ="userhome.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				<li><a href="#">Appointments</a>
				<div class="submenu">
						<ul>
							<li><a href="takeappointments.php">Take Appointments</a></li>
							<li><a href="userviewappointments.php">View Appointments</a></li>
						</ul>
					</div>
				</li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
  </body>
  
			<div class="card" style="">
  <div class="card-body">
  <table class="table table-striped card-text bg-light">
  <thead>

			<!-------header section------->

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col">Status</th>
	 
      
    </tr>
  </thead>
  
		<?php	
		            require_once 'connection.php';
					Session_start();
		            $sql="select * from appointment where username='".$_SESSION['username']."'";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
  
  <tbody>

					<!-------users/patients to view their appointments------>

    <tr>
	 <form action="cancelappointment.php" method="POST"> 
      <td scope="row"><input class="bg-light form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="name" value="<?php echo $row['name'];?>"></td>
      <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>
	  <td><input type="date" name="date" value="<?php echo $row['date'];?>"  readonly></td>
	  <td><input type="text" class="bg-light form-control"  name="slot" value="<?php echo $row['slot'];?>"  readonly></td>
	  <td><input type="text" class="bg-light form-control " name="status" value="<?php echo $row['status'];?>" readonly></td>
	   <td><input type="submit" value="Cancel" class="btn-danger form-control" name="submit"></td>
	      
	</form>
	</tr>
	  

	 

	</tbody>

		<?php
			}
		?>
		
	</table>
	</div>
	</div>


	</div>
</body>
</html> 
  
  
  