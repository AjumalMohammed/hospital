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
				<li><a href ="adminhome.php">Home</a></li>
				<li><a href ="#">Doctors</a></li>
				<li><a href ="adminuser.php">Users</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
			<h1>DOCTOR'S LIST</h1>
			<div class="card" style="">
  <div class="card-body">
  
  <table class="table table-striped card-text bg-light">
  <thead>

		<!-------------header section----------->
  
    <tr class="text-center">
      <th scope="col">Dr.Id</th>
      <th scope="col">Dr.Name</th>
	  <th scope="col">Email</th>
	  <th scope="col">National-Id</th>
	  <th scope="col">Qualification</th>
	  <th scope="col">Experience</th>
	  <th scope="col">Department</th>
	  <th scope="col">Clinic Address</th>
	   <th scope="col">Clinic Timing</th>
	    <th scope="col">Mobile No</th>
		<th scope="col">Status</th>
	 
      
    </tr>
  </thead>

				<!----------------query to fetch and display doctors list---------------->
				
		
  
		<?php
		            require_once 'connection.php';
		            $sql="select * from doctor ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
		
				<!----------------all doctors list---------------->
  <tbody>
    <tr class="text-center">
	<form action="approveddoc.php" method="POST">
      <td><input class="bg-light form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="name" value="<?php echo $row['name'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="email" value="<?php echo $row['email'];?>" readonly></td>
	  <td><input class="bg-light form-control" type="text" name="nationalid" value="<?php echo $row['nationalid'];?>" readonly></td>
	  <td><input  class="bg-light  form-control" type="text" name="qualification" value="<?php echo $row['qualification'];?>" readonly ></td>
	  <td><input type="text" class="bg-light form-control" name="experience" value="<?php echo $row['experience'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="mobile" value="<?php echo $row['mobile'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="status" value="<?php echo $row['status'];?>" readonly></td>
	  
	  
	  <td><input type="submit" value="Approve" class="btn-info form-control" name="submit"></td>
	  <td><input type="submit" value="Reject" class="btn-danger form-control" name="reject"></td>
	  </form>
    </tr>
	
	</tbody>
	
					<?php
						}
					?>
					
	</table>
	</div></div>
	
			<!-------footer section--------->
		
   <?php include "footer.php";
  ?>
   </body>
  </html>