<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Patient</title>

<?php include './init/header.php'  ?>
    <div class="container">
        <div class="row p-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="./process/db_addBranch.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Branch Name</label>
                        <input type="text" class="form-control" name="branchName" placeholder="Branch Name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Branch</button>
                </form>
            </div>
        </div>
    </div>
<?php include './init/footer.php'  ?>