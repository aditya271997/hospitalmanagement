<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Patient</title>
<meta name="viewport" content="width=device-width, initial-scaled=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/449816cdb5.js" crossorigin="anonymous"></script>

</head>
<?php include './init/header.php'  ?>
    <div class="container mt-2">
        <?php if($role === 'staff') { ?>
            <div class="float-right">
                <a class="nav-link btn btn-primary mt-4 mb-4" href="addPatient.php">Add-Patient</a>
            </div>
        <?php } ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Appointment Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $con = mysqli_connect('localhost','root','','hospital_management');
                if($role !== 'admin') {
                    $qry = "SELECT * FROM `patient` WHERE `branch` = '$branch'";
                } else {
                    $qry = "SELECT * FROM `patient`";
                }
                $result = $con->query($qry);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["patient_name"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["dob"];?></td>
                    <td><?php echo $row["branch"];?></td>
                    <td><?php echo $row["appointment_date"];?></td>
                </tr>
            <?php 
                    }
                }
            ?>
            </tbody>
        </table>
    <div>
<?php include './init/footer.php'  ?>