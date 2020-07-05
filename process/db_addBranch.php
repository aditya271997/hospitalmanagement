<?php
    $con = mysqli_connect('localhost','root','','hospital_management');
    $branchName = $_POST['branchName'];
    $sql = "INSERT INTO `branch`(`branch_name`) VALUES ('$branchName')";
    if(mysqli_query($con,$sql)) {
        header('location: ../branchList.php');
        echo "inserted";
    } else {
        header('location: ../addBranch.php');
    }  
?>
