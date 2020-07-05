<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Add-Patient</title>
    <meta name="viewport" content="width=device-width, initial-scaled=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://kit.fontawesome.com/449816cdb5.js" crossorigin="anonymous"></script>

</head>
<script>
	function validateForm() {
  var x = document.forms["form"]["name"].value;
  var x = document.forms["form"]["dob"].value;
  var x = document.forms["form"]["appointment_date"].value;
  var x = document.forms["form"]["branch"].value;
  var x = document.forms["form"]["phoneno"].value;
  if (x == "") {
    alert("all data must be filled out");

    return false;

  }
}	
</script>
<?php include './init/header.php'  ?>
	
	<div class="contai">
	    <div class="img">
	    	<img src="./svg/med.svg">
	    </div>
			<div class="login-container ml-5 mt-5 focus">
				<form action="./process/db_addPatient.php" method="POST">
					<img class="avatar" src="svg/profile_pic.svg">
					<h2> Add Patient</h2>
				<div class="input-div one focus">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Name</h5>
						<input type="text" name="name" class="input">
					</div>
				</div>

				<div class="input-div one focus">
					<div class="i">
						<i class="fas fa-phone"></i>
					</div>
					<div>
						<h5>Phone No</h5>
						<input type="text" name="phoneno" class="input">
					</div>
				</div>
					
					<div class="input-div one focus">
					<div class="i">
						<i class="fas fa-calendar-week"></i>
					</div>
					<div>
						<h5>Date of birth</h5>
						<input type="date" name="dob" class="input">
					</div>
				</div>
				
				<div class="input-div two focus">
					<div class="i">
						<i class="fas fa-clipboard-list"></i>
					</div>
					<div>
						<h5>Branch Name</h5>
						<select name="brach" class="input">
						<?php
							$con = mysqli_connect('localhost','root','','hospital_management');
							$qry = "SELECT * FROM `branch`";
							$result = $con->query($qry);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
						?>
							<option value="<?php echo $row["branch_name"];?>"><?php echo $row["branch_name"];?></option>
						<?php 
								}
							}
						?>
						</select>	
					</div>
				</div>

				<div class="input-div one focus">
					<div class="i">
						<i class="fas fa-calendar-week"></i>
					</div>
					<div>
						<h5>Appointment Date</h5>
						<input type="date" name="appointment_date" class="input">
					</div>
				</div>

				<button type="submit" class="btn btn-primary" value="login">Add Patient</button>
				</form>
			</div>
		</div>
	</div>
<?php include './init/footer.php'  ?>