<?php
session_start();

if(isset($_SESSION['phone']))
{
    header("location: userpage.php");
    exit;
}

require_once "config.php";

$phone = $password = ""; 
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty(trim($_POST['phone'])) || empty(trim($_POST['password'])))
    {
        $err = "Please Enter your Credentials!";
    }
    else
    {
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id,fname,lname,email,phone,password,pan,age,address,gender,type FROM register WHERE phone = ?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt, "s", $param_phone);
    $param_phone= $phone;

    if(mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        
        //verify mobile no.
        if(mysqli_stmt_num_rows($stmt) == 1) 
        {
            mysqli_stmt_bind_result($stmt, $id, $fname, $lname, $email,  $phone, $hashed_password, $pan, $age, $address, $gender, $type);
            if(mysqli_stmt_fetch($stmt))
            {
                //verify password
                if(password_verify($password, $hashed_password))
                {
                    session_start();
                    $_SESSION['fname'] = $fname;
                    $_SESSION['phone'] = $phone;
                    $_SESSION['id'] = $id;
                    $_SESSION["loggedin"] = true;

                    //redirect user to welcome page
                    header("location: userpage.php");
                }
            }
        }
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <style>
        *
body{
    font-family: 'Helvetica', 'Arial', sans-serif;
    margin:0px;
    padding:0px;
    background: url('newbg.png');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position-x: right;
    image-resolution: 200px;
    width:1400px;
    
}

.left{
    color: #0a4d88;
    position: absolute;
    left:34px;
    top: 22px;
    display: inline-block;
    font-family: 'Helvetica', 'Arial', sans-serif;
    text-align: center;
    font-weight: 600;

}


 .right{
    color: aliceblue;
    position: absolute;
    right:34px;
    top: 22px;
    display: inline-block;

}

.left{
    text-align: center;
    font-size: 15px;
    font-weight: 600;
}
.left img{
    width:62px;
}
.btn{
    display: block;
    float: right;
    font-family: 'Helvetica', 'Arial', sans-serif;
    margin: 4px 8px;
    background-color: white;
    color: black;
    padding: 10px 22px;
    border: 2px solid purple;
    border-radius: 10px;
    font-size: 17px;
    
    cursor: pointer;
}
.btn:hover{
    background-color: rgb(53, 53, 50);
    color: grey; 
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
    #age1{
        font-size: 20px;
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
    .move {
        color: red;
    }
    </style>
</head>


<body>

    <header class="header">

        <div class="right">
            <a href="admin.php">
            <button class="btn"><b>Admin Login</b></button>
            </a>
            <a href="contactus.php">
            <button class="btn"><b>Contact Us</b></button>
            </a>
        </div>
        
    </header>

    <div class="conatiner">
            <div class="form">
                <h1>PCK Bank Welcomes You!</h1>
                
            <form action= "" method = "post"> 
                <div class="form">
                    
                    <input type="text" name="phone" placeholder="Registered Mobile Number">
                
                </div>
                <div class="form">
                    
                    <input type="password" name="password" placeholder="Enter Password">
                
                </div>
                <button type = "submit" class = "btn2">Login</button>
                <div class="form">
               <center> <h4>New User? <a href = "register.php">Register Here</a></h4></center>
            </form>
            </div>
            <marquee class = "move"> <b>PCK Bank Never Calls for any Personal Details and OTP! </b></marquee>
    </div>
</body>
</html>