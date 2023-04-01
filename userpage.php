<?php
session_start();
include("config.php"); 
$id = $_SESSION['id'];

$sql = "SELECT Amount From deposit Where id = '$id'";
$result = mysqli_query($conn,$sql);

$present = mysqli_num_rows($result);

if($present > 0)
{
    $row = mysqli_fetch_array($result);
    $total = $row['Amount'];
}
else
{
    $total = 0;
}
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
    header("location: index.php");
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello User</title>
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">

<style>

*
body{
    background: url('new.webp');
    background-size: 120%; 

}
.left{
    color: #0a4d88;
    position: absolute;
    left:34px;
    top: 22px;
    display: inline-block;
    text-align: center;
    font-weight: 600;
    font-family: 'Helvetica', 'Arial', sans-serif;

}
 .left img{
    width:62px;
}
 .right{
     position:absolute;
     right:34px;
     top: 22px;
     display: inline-block;
 }

 .header{
     background-color: aquas;
 }
 .container{
     position: absolute;
     top :150px;
 }
 .row{
     
    position: absolute;
    left: 158px;
    top: 185px;
    display: flex;
    flex-wrap: wrap;

 }
 .row2{
     
    position: absolute;
    left: 309px;
    top: 420px;
    display: flex;
    flex-wrap: wrap;

 }


 
 .btn{
 display: block;
 float: right;
 margin: 4px 8px;
 background-color: black;
 color: white;
 padding: 10px 22px;
 border: 3px solid white;
 border-radius: 10px;
 font-size: 17px;
 cursor: pointer;
}
.btn:hover{
 background-color: rgb(53, 53, 50);
 color: grey; 
}
.btn2{
    position: absolute;
    background-color: blue;
    margin: 400px 100px;
    padding: 7px 27px;
    border-radius: 10px;
    color: white;
 
}
.btn2:hover{
    background-color: rgb(53, 53, 50);
    color:white;
}

.btn3 {
    font-size: 20px;
    position: absolute;
    background-color: blue;
    margin: 150px 350px;
    padding: 37px 85px;
    border-radius: 10px; 
    color: white;
}

.btn3:hover {
    background-color: rgb(53, 53, 50);
    color:white;    
}
.btn4 {
    font-size: 20px;
    position: absolute;
    background-color: blue;
    margin: 150px 620px;
    padding: 37px 85px;
    border-radius: 10px; 
    color: white;
}
.btn4:hover 
{
    background-color: rgb(53, 53, 50);
    color:white;
}

.btn6
{
    font-size: 20px;
    position: absolute;
    background-color: blue;
    margin: 150px 900px ;
    padding: 27px 101px;
    border-radius: 10px;
    color: white;
}
.btn6:hover
{
    background-color: rgb(53, 53, 50);
    color:white;
}

.ribbon {
    margin: auto;
    width: 600px;
    border: 4px solid black;
    background-color: lightgray;
    padding : 1px;
    color:black;
}

</style>
</head>
<body>
    <header class="header">
        <div class="right">
            
            <a href = "logout.php">
            <button class="btn"><b>Log Out</b></button>
            </a>
        </div>
    </header>
    <div class = "ribbon">
    <h1><center> <?php  echo "WELCOME USER: ". $_SESSION['fname'] ?></center> </h1>
    <h1><center> <?php  echo "Available Balance: ₹". $total; ?></center> </h1>
</div>


        <div class="deposit">
            <a href = "addmoney.php">
            <button class = "btn3"><b>Deposit</b></button></a>
        </div>

    
        <div class="withdraw">
             <a href = "getmoney.php">
            <button class = "btn4"><b>Withdraw</b></button></a>
        </div>    

        
        <div class="sendmoney">
            <a href = "sendmoney.php">
            <button class="btn6"><b>Transfer Funds</b></button></a>
        </div>

 
</body>
</html>