<?php
  session_start();
  if (isset($_SESSION['email'])) {
    $storeEmail = $_SESSION['email'];
    $con = mysqli_connect('localhost','root','','hospital_management');
    $qry = "SELECT * FROM `users` WHERE `email`='$storeEmail'";
    $run = mysqli_query($con,$qry);
    if($fetch = mysqli_fetch_assoc($run)) {
        $role= $fetch['role'];
        $branch = $fetch['branch'];
    }
  }
  else{
    header("location: index.php");
  }
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Bootstrap Files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--Bootstrap files end here-->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light pt-2" href="dashboard.php" style="font-family: 'Galada', cursive;">Hospital Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-light" href="dashboard.php">Home</a>
            </li>
            <?php if($role === 'admin') { ?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="staffList.php">Staff</a>
                </li>
            <?php } ?>
            <?php if($role === 'admin' || $role === 'staff') { ?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="patientList.php">Patient</a>
                </li>
            <?php } ?>
            <?php if($role === 'admin') { ?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="branchList.php">Branch</a>
                </li>
            <?php } ?>
        </ul>
        <div class="text-rignt"><a class="nav-link text-light" href="./process/logout.php">Logout</a></div>
    </div>
    </nav>