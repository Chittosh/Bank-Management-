<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="admin-user.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM register WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>FIRST NAME</label>
                                        <input type="text" name="fname" value="<?=$student['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>LAST NAME</label>
                                        <input type="text" name="lname" value="<?=$student['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>EMAIL ID</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PHONE NUMBER</label>
                                        <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PASSWORD CHANGE</label>
                                        <input type="text" name="password" value="<?=$student['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PAN NUMBER</label>
                                        <input type="text" name="pan" value="<?=$student['pan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>AGE</label>
                                        <input type="text" name="age" value="<?=$student['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ADDRESS</label>
                                        <input type="text" name="address" value="<?=$student['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>GENDER</label>
                                        <input type="text" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ACCOUNT TYPE</label>
                                        <input type="text" name="type" value="<?=$student['type'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Profile
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>