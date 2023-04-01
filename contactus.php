<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Helvetica', 'Arial', sans-serif;
    
}

body{
    background-image: url('newbg.png');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position-x: right;
}
.btn{
    display: block;
    float: right;
    margin: 4px 8px;
    background-color: white;
    color: black;
    padding: 10px 22px;
    border: 2px solid grey;
    border-radius: 10px;
    font-size: 17px;
    cursor: pointer;
   }

.btn:hover{
    background-color: rgb(53, 53, 50);
    color: grey; 
   }

.contact
{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: url(/cbg.jpeg);
    background-size: cover;

}

.contact .content
{
    max-width: 800px;
    text-align: center;

}

.contact .content h1
{
    font-size: 36px;
    font-weight: 500;
    color: #fff;
}

.contact .content p
{
    font-weight: 300;
    color: #fff;
}

.container
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}

.container .contactInfo 
{
    width: 50%;
    display: flex;
    flex-direction: column;
}

.container .contactInfo .box 
{
    position: relative;
    padding: 20px 0;
    display: flex;
}

.container .contactInfo .box .icon
{
    min-width: 60 px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;

}

.container .contactInfo .box .icon text p{
    padding: 2px 3px;
    margin: 2px 3px;
}

.container .contactInfo .box .text
{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: #fff;
    flex-direction: column;
    font-weight: 300;
    
}

.container .contactInfo .box .text h3
{
    font-weight: 500;
    color: #00bcd4;
}
.container .contactInfo .box .text p
{
    padding: 2px 3px;
    margin: 2px 3px;
}
#mob {
    color: antiquewhite;
    padding: 2px 3px;
    margin: 2px 3px;
    size: 10px;
}
#em{
    color: antiquewhite;
    padding: 2px 3px;
    margin: 2px 3px;
}
#add{
    color: antiquewhite;
    padding: 2px 3px;
    margin: 2px 3px;
}
</style>

    <script src="https://kit.fontawesome.com/cd59ad95b8.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="contact">
        <div class="content">
            <h1><b>Contact Us</b></h1>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"></div>
                    <div class="text">
                    <h3><i class="fa fa-map-marker" id="add"></i><b>Address</b></h3>
                    <p><b>Vishwakarma Institute of Information Technology</b></p>
                    <p><b>Kondhwa Budruk</b></p>
                    <p><b>Pune - 411048</b></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"></div>
                    <div class="text">
                    
                    <h3><i class="fa fa-envelope" id="em"></i><b>Email</b></h3>
                    <p><b>krishna.22110152@viit.ac.in</b></p>
                    <p><b>chittosh.22110562@viit.ac.in</b></p>
                    <p><b>priyank.22111319@viit.ac.in</b></p>

                    </div>
                </div>
                <div class="box">
                    <div class="icon">	
                        </div>
                    <div class="text">
                    <h3><i class="fa fa-mobile" id="mob"></i><b>Phone</b></h3>
                    <p><b>+91-7006327972</b></p>
                    <p><b>+91-8329278534</b></p>
                    <p><b>+91-9930828442</b></p>
                    </div>
                </div>
             </div>
        </div>
        
        <a href = "index.php">
        <button class="btn"><b>Home Page</b></button>
        </a>


    </section>
</body>
</html>