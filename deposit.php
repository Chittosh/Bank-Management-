<?php

session_start();
include('config.php');

$money = $_POST['money'];
$id = $_SESSION['id'];

$query = "SELECT Amount FROM deposit Where id = '$id'";
$result = mysqli_query($conn,$query);
$present = mysqli_num_rows($result);

if($present > 0) 
{
    $row = mysqli_fetch_array($result);
    $deposit = $row['Amount'];
    $total = $deposit+$money;

    $querys = "UPDATE deposit Set Amount = '$total' Where id = '$id'";
    $result = mysqli_query($conn,$querys);
    header("location: userpage.php");
}

else
{

    $sql = "INSERT INTO deposit (id,Amount) VALUES($id,$money)";
    $result = mysqli_query($conn,$sql);
    header("location: userpage.php");
}
?>