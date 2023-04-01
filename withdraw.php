<?php

session_start();
include('config.php');

$money = $_POST['money'];
$id = $_SESSION['id'];

$sql = "SELECT Amount FROM deposit Where id = '$id'";
$result = mysqli_query($conn,$sql);
$present = mysqli_num_rows($result);

if($present > 0) 
{
    $row = mysqli_fetch_array($result);
    $Amount = $row['Amount'];
    if($Amount > $money)
    {
        $sum = $Amount - $money;
        $querys = "UPDATE deposit Set Amount = '$sum' Where id = '$id'";
        $result = mysqli_query($conn,$querys);
        header("location: userpage.php");
    }
    else
    {
        $_SESSION['alert'] = "No Money";
        header("location: getmoney.php");
    }
}

?>