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
  <body> 
		<div>
			
  <div class="container bg-light col-5">

				<!-----form----->
					
            <form class="form-horizontal" name="myform" role="form" onsubmit="return validate_form()" action="doctor-reg1.php" method="post">
                <h2>Registration</h2>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >ID</label>
                    <div class="col-sm-8">
                        <input type="text" id="id" name="id" class="form-control " autofocus>
                    </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" name="name" class="form-control " autofocus>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control"name="nationalid">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="birthDate" class="form-control" name="qualification">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" placeholder="experience" class="form-control" name="experience">
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label  class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming">
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username">
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" placeholder="Password" class="form-control"name="password">
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cnfrmpassword" placeholder="Cnfrm Password" class="form-control" name="cpassword"><br>
						
                    </div>
					<button type="submit" class="btn btn-primary ml-5" name="submit">Register</button>
					<button type="submit" class="btn btn-primary ml-5" name="login">Login</button>
                </div>
                </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->

		<!------javascript validation------>

		<script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				var str1=document.forms["myform"]["cnfrmpassword"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				else if(str != str1){
					alert ("password doesn't match");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>     
</body>
</html>