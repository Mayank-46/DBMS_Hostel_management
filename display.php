<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<?php  include 'links.php' ?>
	<?php include 'C:\xampp\htdocs\style.css' ?>
</head>
<body>
	<div class="main-div">
		<h1>Students details of hostel</h1>

		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thread>
						<tr>
							<th>name</th>
							<th>roll_no.</th>
							<th>semester</th>
							<th>gender</th>
							<th>mobile_no.</th>
							<th>email_id</th>
							<th colspan="2">Operation</th>
						</tr>
					</thread>
					<tbody>
						<?php

						include 'connection.php';

						$selectquery = "select *from information";

						$query = mysqli_query($con,$selectquery);

						$nums = mysqli_num_rows($query);



						while($res= mysqli_fetch_array($query))
						{
							?>

							<tr>
							<td><?php echo $res['name']?></td>
							<td><?php echo $res['roll']?></td>
							<td><?php echo $res['semester']?></td>
							<td><?php echo $res['gender']?></td>
							<td><?php echo $res['mobile']?></td>
							<td><span class="email-style"><?php echo $res['email']?></span></td>
							<td><a href="updates.php?<?php echo $res['roll']?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
							<td><i class="fa fa-trash" aria-hidden="true"></i></td>
							</tr>
						<?php
						
						}

						?>
						
					</tbody>
				</table>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
