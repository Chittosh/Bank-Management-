<?php
        
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

        <title>Student CRUD</title>
        <style>
            .btn btn-success btn-sm{
                width = 100%;
            }
        </style>
    </head>
    <body>
    
        <div class="container mt-4">


            
            <!-- <?php include('message.php'); ?> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Account Balance
                                <a href="admin-user.php" class="btn btn-primary float-end">Log Out</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Balance</th>
                                        <th></th>
                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query_1 = "SELECT * FROM deposit";
                                    $query_2 = "SELECT * FROM register";
                                    $query_run1 = mysqli_query($con,$query_1);
                                    $query_run2 = mysqli_query($con,$query_2);
                                    
                                    
                                    if(mysqli_num_rows($query_run1) > 0 && mysqli_num_rows($query_run2) > 0)
                                    {
                                        foreach($query_run1 as $deposit  )
                                        { 
                                            foreach($query_run2 as $register){
                                                if($register['id'] == $deposit['id']){
                                            ?>
                                            <tr>
                                                <td><?= $register['fname'];?><?= $register['lname'];?></td>
                                                <td><?= $register['id'];?></td>
                                                <td><?= $deposit['Amount'];?></td>
                                                
                                        </form></td>
                                        </tr>    
                                            <?php
                                            
                                            }
                                            // echo $register['fname'];
                                        }
                                    }
                                }
                                    else{
                                        
                                        echo "No Record FOund";
                                    }

                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>