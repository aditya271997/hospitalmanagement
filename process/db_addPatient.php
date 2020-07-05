<?php
    $con = mysqli_connect('localhost','root','','hospital_management');
    $name = $_POST['name'];
    $phone = $_POST['phoneno'];
    $dob = $_POST['dob'];
    $brach = $_POST['brach'];
    $appointmentDate = $_POST['appointment_date'];
    $sql = "INSERT INTO `patient`(`patient_name`, `phone`, `dob`, `branch`, `appointment_date`) VALUES ('$name','$phone','$dob','$brach','$appointmentDate')";
    if(mysqli_query($con,$sql)) {
        header('location: ../patientList.php');
        echo "inserted";
    } else {
        header('location: ../addStaff.php');
    }  
?>
