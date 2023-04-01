<?php

require_once "config.php";

$phone = $password = "";
$phone_err = $password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty(trim($_POST["phone"]))) 
    {
        $phone_err = "Mobile No. Cannot be blank";
    }
    else 
    {
        $sql = "SELECT id FROM register WHERE phone = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt) 
        {
            mysqli_stmt_bind_param($stmt, "s", $param_phone);

            $param_phone = trim($_POST['phone']);
            
            if(mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $phone_err = "This mobile number is already registered with us!";
                }
                else
                {
                    $phone = trim($_POST['phone']);
                }
            }
            else {
                echo "Something Went Wrong!";
            }
        }
    }
    mysqli_stmt_close($stmt);


//check for password

if(empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank!";
}

else if(strlen(trim($_POST['password'])) < 8) {
    $password_err = "Password cannot be less than 8 characters!";
}

else {
    $password = trim($_POST['password']);
}

if(empty($phone_err) && empty($password_err))
{
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $pan = trim($_POST['pan']);
    $age = trim($_POST['age']);
    $address = trim($_POST['address']);
    $gender = trim($_POST['gender']);
    $type= trim($_POST['type']);
    $balance = trim($_POST['balance']);

    $sql = " INSERT INTO register (fname, lname, email, phone , password , pan , age , address , gender , type) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) 
    {
        mysqli_stmt_bind_param($stmt, "ssssssssss",$param_fname, $param_lname, $param_email, $param_phone , $param_password , $param_pan , $param_age , $param_address , $param_gender , $param_type);

        $param_fname = $fname;
        $param_lname = $lname;
        $param_email = $email;
        $param_phone = $phone;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_pan = $pan;
        $param_age = $age;
        $param_address = $address;
        $param_gender = $gender;
        $param_type= $type;

        if(mysqli_stmt_execute($stmt))
        {
            header("location: index.php");
        }

        else 
        {
            "Something Went wrong!";
        }
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <style>
           *{
    font-family: 'Helvetica', 'Arial', sans-serif;
    margin:0;
    padding: 0;
}
body{
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

.container{
    background-color: white;
    border: 2px solid black;
    color: black;
    margin: 80px 491px;
    padding: 55px;
    width: 32%;
    border-radius: 51px;
}
.container h2{
    display: inline-block;
    font-size: 40px;
    border-bottom: 5px solid grey;
    margin-bottom: 30px;
    padding: 19px 0;
}
.box{
    padding: 0 12px;
    margin: 15px 0;
    width: 80%;
    border: 2px solid grey;
    border-radius: 10px;
}
.box input{
    background: none;
    padding: 6px 10px;
    font-size: 17px;
    width: 75%;
    border: none;
    outline: none;
    }
.btn2{
    position: absolute;
    left: 00px;
    background: none;
    cursor: pointer;
    outline: none;
    margin: 19px 0;
    padding: 11px 39px;
    font-size: 18px;
    border-radius: 10px;
    border: 2px solid grey;
    font-weight: 600;
}
.btn2:hover{
    background-color: rgb(53, 53, 50);
    color: grey; 
}
.btn3{
    background-color: blue;
    color: white;
    position: absolute;
    left: 713px;    
    cursor: pointer;
    outline: none;
    margin: 0px 0;
    padding: 5px 30px;
    font-size: 18px;
    border-radius: 10px;
    border: 2px solid grey;
    font-weight: 600;
}
.btn3:hover {
    background-color: rgb(53, 53, 50);
    color: grey; 
}
.box i{
    width: 11%;
    text-align: center;
}
.Gender{
    padding: 8px 12px;
    font-size: 17px;
    border: none;
    outline: none;
}
.container1{
    border: 2px solid none;
    width:300px;
    height:290px;
    margin-bottom: 10px;

}
.container2{
    border: 2px solid none;
    width:350px;
    height:210px;
}
.heading{
    width: 100%;
}
.flex{
    display:flex;

}
.accountype{
    margin-left: 10px;
    padding :30px;
    text-align: center;
}
    </style>
</head>
<body>

    <header class="header">
        <div class="right">
            <a href = "index.php">
            <button class="btn"><b>Home Page</b></button>
        </a>
        </div>
        
    </header>

<form name="myform" action= "" method="post">
 <div class="container">
    <div class="heading"><h2>CREATE ACCOUNT</h2></div>
    <div class="flex">
<div class="container1">
    <div class="box">
        <i class="fa fa-user"></i>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
    </div>
    <div class="box">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Valid Email ID" required>
    </div>
    <div class="box">
        <i class="fa fa-unlock-alt"></i>
        <input type="password" name="password" id="password" placeholder="New Password" required>
    </div>
    
    <div class="box">
        <i class="fa fa-user"></i>
        <input type="number" name="age" id="age" placeholder="Current Age" required>
    </div>
    <div class="box" >
    <input type="text" name="gender" id="gender" placeholder="Male/Female" required>
    </div>
</div>
<div class="container2">
    <div class="box">
        <i class="fa fa-user"></i>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
    </div>
    <div class="box">
        <i class="fa fa-phone"></i>
        <input type="text" name="phone" id="phone" placeholder="Enter Mobile No" required>
    </div>
    <div class="box">
        <i class="fa fa-user"></i>
        <input type="text" name="pan" id="pan" placeholder="Valid PAN Number" required>
    </div>
    <div class="box">
    <i class="fa fa-user"></i>
    <input type="text" name="address" id="address" placeholder="Current Residential Address" required>
    </div>
    <div class="box">
    <input type="text" name="type" id="type" placeholder="Savings/Current Account" required>
    </div>
</div>
</div>

    <input type="checkbox" id="declaration" name="declaration1" value="declaration" required>
    <label for="declaration"> I certify that I am 18 years old or above and all the details provided above are true to my information and I agree to all the Terms and Conditions.</label>
    <br>
        <input type="submit" class="btn3" value="Submit">
    </div>
</form>
</body>
</html>
