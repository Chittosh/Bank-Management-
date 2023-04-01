<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home Page</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style-admin.css">
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
    font-family: 'Signika', sans-serif;
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
    background-color: white;
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

</style>
<body>
    <header class="header">

        <div class="right">
            <a href = "index.php">
            <button class="btn"><b>Home Page</b></button>
            </a>
        </div>
        
    </header>
    <form action="admin-user.php">
    <div class="conatiner">
            <div class="form">
                <h1>Admin Login</h1>
                <div class="form">
                    
                    <input type="password" name="Password" placeholder="Enter Password">
                
                </div>
                <button type = "submit" class = "btn2">Login</button>
                </a>

            </div>

    </div>
</form>
</body>
</html>