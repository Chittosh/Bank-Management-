<?php

session_start();
include('config.php');
$id = $_SESSION['id'];

$money = $_POST['money'];
$rphone = $_POST['rphone'];

$sql = "SELECT * from register Where phone = '$rphone'";
$result = mysqli_query($conn,$sql);
$present = mysqli_num_rows($result);

if($present > 0) 
{
    $sql = "SELECT Amount from deposit Where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $second = mysqli_num_rows($result);

    if($second > 0)
    {
        $row = mysqli_fetch_array($result);
        $Amount = $row['Amount'];
        if($Amount > $money)
        {
            $query = "SELECT id from register Where phone='$rphone'";
            $result = mysqli_query($conn,$query);
            
            $row = mysqli_fetch_array($result);
            $rid = $row['id'];

            $sql = "SELECT Amount from deposit Where id = '$id'";
            $result = mysqli_query($conn,$sql);
            $third = mysqli_num_rows($result);

            if($third > 0)
            {
                $sum = $Amount - $money;

                $query = "UPDATE deposit SET Amount = '$sum' Where id = '$id'";
                $result = mysqli_query($conn,$query);

                $sql = "SELECT Amount from deposit Where id = '$rid'";
                $results = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($results);
                $mon = $row['Amount'];
                $total = $mon + $money;

                $query = "UPDATE deposit SET Amount = '$total' Where id = '$rid'";
                $result = mysqli_query($conn,$query);
                header("location: display.php");
            }
            else 
            {
                $sum = $Amount - $money;
                $query = "UPDATE deposit SET Amount = '$sum' Where id = '$id'";
                $result = mysqli_query($conn,$query);
                $query = "INSERT Into deposit(id,Amount) VALUES('$rid','$money')";
                $result = mysqli_query($conn,$query);
                header("location: display.php");

            }
        }

        else 
        {
            header("location: display2.php");
        }
    }
}

else 
{
    header("location: display3.php");
}
?>