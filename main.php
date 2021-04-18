<!DOCTYPE html>
<html lang="en">
<head>
  <title>hostel_form</title>
  	<?php  include 'links.php' ?>
  	<?php include 'C:\xampp\htdocs\style.css' ?>
</head>
<body>
	<div class="container register">
		<div class="row">
			<div class="col-md-3 register-left">
				<img src="C:/xampp/htdocs/Indian_Institute_of_Information_Technology,_Design_and_Manufacturing,_Kancheepuram_logo.png" alt=""/>
				<h3>Welcome</h3>
				<p>Please fill all the details carefully.</p>
				<a href="display.php">Check Form</a><br/>
			</div>
			<div class="col-md-9 register-right">

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<h3 class="register-heading" >Apply for hostel room</h3>
						<form action="" method="POST">
						<div class="row register-form">

							<div class="col-md-6">

								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your name*" name="user" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Roll no.*" name="roll" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your semester*" name="semester" value="" required/>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="enter your gender*" name="gender" value="" required/>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="mobile number *" name="mobile" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your email id*" name="email" value="" required/>
								</div>
								 <button type="submit" class="registerbtn" name="submit" value="register"/>Register</button>
 								 </div>

							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
 
	$name=$_POST['user'];
	$roll=$_POST['roll'];
	$semester=$_POST['semester'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

	$insertquery= " insert into information(name,roll,semester,gender,mobile,email)values('$name','$roll','$semester','$gender','$mobile','$email') ";

	$res = mysqli_query($con,$insertquery);

	if($res){
	?>
	<script>
		alert('data inserted properly');
	</script>
	<?php
	}else{
	?>
	<script>
		alert('data not inserted properly');
	</script>
	<?php
	}
}

?>
