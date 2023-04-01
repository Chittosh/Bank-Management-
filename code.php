<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_account']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_account']);

    $query = "DELETE FROM register WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    $query1 = "DELETE FROM deposit WHERE id='$student_id' ";
    $query_run2 = mysqli_query($con, $query1);

    if($query_run && $query_run2)
    {
        $_SESSION['message'] = "Profile Deleted Successfully";
        header("Location: admin-user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Profile Not Deleted";
        header("Location: admin-user.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $query = "UPDATE register SET fname='$fname', lname='$lname', email='$email', phone='$phone', password='$password', pan='$pan', age='$age', address='$address', gender='$gender', type='$type' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Profile Data Updated Successfully";
        header("Location: admin-user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Profile Data Not Updated";
        header("Location: admin-user.php");
        exit(0);
    }

}




?>