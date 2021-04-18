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
				<img src="" alt=""/>
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

							<?php

							include 'connection.php';

							$rolls=$_GET['roll'];

							$showquery="select * from information where roll={$rolls}";

							$showdata = mysqli_query($con,$showquery);

							$arrdata = mysqli_fetch_array($showdata);

							if(isset($_POST['submit'])){

								$rollupdate=$_GET['roll'];
							 
								$name=$_POST['user'];
								$roll=$_POST['roll'];
								$semester=$_POST['semester'];
								$gender=$_POST['gender'];
								$mobile=$_POST['mobile'];
								$email=$_POST['email'];

								$query= " update information set name='$name',roll='$roll',semester='$semester',gender='$gender',mobile='$mobile',email='$email') where roll=$rollupdate ";



								$res = mysqli_query($con,$query);

								if($res){
								?>
								<script>
									alert('data updated properly');
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
							<div class="col-md-6">

								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your name*" name="user" value="<?php echo $arrdata['name']?>" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Roll no.*" name="roll" value="<?php echo $arrdata['roll']?>" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your semester*" name="semester" value="<?php echo $arrdata['semester']?>" required/>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="enter your gender*" name="gender" value="<?php echo $arrdata['gender']?>" required/>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="mobile number *" name="mobile" value="<?php echo $arrdata['mobile']?>" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your email id*" name="email" value="<?php echo $arrdata['email']?>" required/>
								</div>
								 <button type="submit" class="registerbtn" name="submit" value="register"/>Update</button>
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

