<?php
session_start();

$message = '';
if(isset($_SESSION['alert']))
{
    $message = "Not Enough Money in Bank Account";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *
body{
    font-family: 'Helvetica', 'Arial', sans-serif;
}

.conatiner{
    background-color: white;
    border: 2px solid black;
    color: black;
    margin: 200px 491px;
    padding: 55px;
    width: 32%;
    border-radius: 51px;
}
.form input{
    font-family: 'Helvetica', 'Arial', sans-serif;
    text-align: center;
    display: block;
    width: 250px;
    padding: 6px;
    border: 2px solid black;
    margin: 9px auto;
    font-size: 17px;
    background-color: #00000000;
    border-radius: 10px;
    }
    .form h1{
        text-align: center;
    }
    .form button{
        display: block;
        width: 23%;
        margin: 20px 180px;
    }
    .btn2{
       
       font-family: 'Helvetica', 'Arial', sans-serif;
       margin: 30px 229px;
       background-color: blue;
       color:white;
       padding: 10px 22px;
       border: 2px solid grey;
       border-radius: 10px;
       font-size: 17px;
       cursor: pointer;
       }
       .btn2:hover{
           background-color: rgb(53, 53, 50);
           color: grey; 
       }
       h4 {
        color: red;
        text-align: center;
       }

</style>

<body>
<form action="transfer.php" method="post">
<div class="conatiner">
            <div class="form">
                <h1>Transfer Funds</h1>
                <h4>  <?php echo $message; ?>   </h4>

            <form action= "" method = "post"> 
                <div class="form">
                    <input type="number" name="money" placeholder="Enter Amount to Send">
                </div>
                <div class="form">
                    <input type="text" name="rphone" placeholder="Enter Mobile No. of receiver">
                </div>
                <button type = "submit" class = "btn2">GO</button>
            
    </form>
    <?php unset($_SESSION['alert']); ?>
</body>
</html>