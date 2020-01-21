<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="userhome.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				<li><a href="appointments.php">Appointments</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
  </body>
  
			<div class="card" style="">
  <div class="card-body">
  <form action="appointment1.php" method="POST">
  <table class="table table-striped card-text bg-light">
  <thead>

		<!------header section-------->

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col"></th>
	 
      
    </tr>
  </thead>
  
		<?php
		            require_once 'connection.php';
		            $sql="select * from doctor";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
  
  <tbody>
				<!------ user/patient book an appointment field-------->

    <tr>
		  <td scope="row"><input class="bg-light" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
		  <td><input type="text" class="bg-light" name="name" value="<?php echo $row['name'];?>"></td>
		  <td><input type="text" class="bg-light" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
		  <td><input type="text" class="bg-light" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
		  <td><input type="text" class="bg-light" name="department" value="<?php echo $row['department'];?>" readonly></td>
		  <td><input type="date" name="date"></td>
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
		  <td><input type="submit" value="Book" name="submit">
		</tr>
	
	</tbody>
	
					<?php
						}
					?>
					
	</table>
	</div></div>
	</div>
 </html>