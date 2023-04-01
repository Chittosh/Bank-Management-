<?php
session_start();
require 'dbcon.php';

if(isset($_POST['update']))
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Profile</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile 
                            <a href="admin-user.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            // $student_id =$_GET['id'];
                            $query = "SELECT * FROM register WHERE id='$student_id'";
                            $query_run = mysqli_query($con , $query);

                            if(mysqli_num_rows($query_run) > 0 )
                            {
                                $register = mysqli_fetch_array($query_run);
                                // print_r($register);
                                ?>
                                 <form action="admin-user.php" method="POST">
                                <div class="mb-3">
                                    <label>First Name</label>
                                    
                                    <p class="form-control">
                                         <?=$register['fname'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <p class="form-control">
                                         <?=$register['lname'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                         <?=$register['email'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <p class="form-control">
                                         <?=$register['phone'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <p class="form-control">
                                         <?=$register['password'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PAN</label>
                                    <p class="form-control">
                                         <?=$register['pan'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Age</label>
                                    <p class="form-control">
                                         <?=$register['age'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <p class="form-control">
                                         <?=$register['address'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Gender</label>
                                    <p class="form-control">
                                         <?=$register['gender'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Type</label>
                                    <p class="form-control">
                                         <?=$register['type'];?>
                                    </p>
                                </div>
                                <!-- <div class="mb-3">
                                    <button type="submit" name="update Profile" class="btn btn-primary">Update Profile</button>
                                </div> -->

                                </form>
                                <?php
                                // print_r($student);
                            }
                            else{
                                echo "NO record found";
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