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
							<li><a href="bookappointments.php">Take Appointments</a></li>
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
			
		<!----------header section--------------->

    <tr>  
      <th scope="col">Dr.ID</th>
      <th scope="col">Dr.Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	</tr>
	
  </thead>
			
					<!------query for booking an appointment--------->
  
		<?php
		            require_once 'connection.php';
		            $sql="select * from doctor";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
					<!--------view doctors and book an appointment details-------->

  <tbody>
    <tr>
	<form action="appointment1.php" method="POST" name="submit">
	  <td scope="row"><input class="bg-light form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="name" value="<?php echo $row['name'];?>"></td>
      <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>
	  <td><input type="date" class="bg-light form-control" name="date"></td>
	  <td><select name="slot">
			<option>9am</option>
			<option>10am</option>
			<option>11am</option>
			<option>12am</option>
			<option>1pm</option>
			<option>2pm</option>
			<option>3pm</option>
			<option>4pm</option>
			<option>5pm</option>
	  </select></td>
	   
	  <td><input type="submit" value="Book" name="submit" class="btn-success form-control">
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