<?php
    $con = mysqli_connect('localhost','root','','hospital_management');
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phoneno'];
    $brach = $_POST['brach'];
    $role = "staff";
    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, `branch`, `role`) VALUES ('$name','$email','$password','$phone','$brach', '$role')";
    if(mysqli_query($con,$sql)) {
        header('location: ../staffList.php');
        echo "inserted";
    } else {
        header('location: ../addStaff.php');
    }  
?>
