<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Staff</title>
<meta name="viewport" content="width=device-width, initial-scaled=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/449816cdb5.js" crossorigin="anonymous"></script>
</head>

<?php include './init/header.php'  ?>
    <div class="container mt-2">
        <div class="float-right">
            <a class="nav-link btn btn-primary mt-4 mb-4" href="addStaff.php">Add-Staff</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Branch</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $con = mysqli_connect('localhost','root','','hospital_management');
                $qry = "SELECT * FROM `users`";
                $result = $con->query($qry);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["branch"];?></td>
                </tr>
            <?php 
                    }
                }
            ?>
            </tbody>
        </table>
    <div>
<?php include './init/footer.php'  ?>