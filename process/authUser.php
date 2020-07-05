<?php

    // include "./db_connection.php";
    $con=mysqli_connect('localhost','root','','hospital_management');
    $email=$_POST['username'];
    $password=$_POST['password'];
    $role;
    echo $email;
    echo $password;
    $sql="SELECT * from users where email='$email' and password='$password'";
    $query=mysqli_query($con,$sql);
    $rw=mysqli_num_rows($query);
    if($rw>0) { 
        session_start();
        $_SESSION['email']=$email;
        $SESSION['role']=$role;
        header('location: ../dashboard.php');
        echo "logged in";
    }
    else {
        header('location: ../index.php');
        echo "error";
    }
?>
