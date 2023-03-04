<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="shortcut icon" href="./images/letter-t-icon-png-11482-Windows.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Roboto Slab', serif;
            margin: 0;
            padding: 0;
        }
        .main{
            width: 27%;
            height: 90vh;
            padding-left: 3%;
            margin-left: 70%;
            background-color:rgb(101, 255, 242);
            padding-top: 10vh;
        }
        .main h1{
            font-size: 3.8rem;
            color: rgb(38, 3, 96);
            font-family: 'Rowdies', cursive;
        }
        .main h2{
            text-align: center;
            font-size: 1.5rem;
            margin-top: 4vh;
            font-weight: 500;
        }
        .main h3{
            margin-left: 9%;
            margin-top: 8vh;
        }
        .main input[type="password"]{
            width: 78%;
            padding: 0 2%;
            margin-top: 0;
            height: 6vh;
            font-size: 1.5rem;
            border: 1px solid rgb(13, 1, 88);
            margin-left: 9%;
        }
        .main input[type="password"]:focus{
            box-shadow: rgba(15, 1, 124, 0.363) 0px 0px 5px 1px;
            outline: none;
        }
        .img img{
            width: 100%;
            position: absolute;
            margin: 0;
            top: 0;
            margin-left: -30%;
            height: 100vh;
            z-index: -10;
            
        }
        .form{
            border: 2px solid blue;
            border-radius: 8px;
            width: 74%;
            margin-left: 8%;
            margin-top: 13vh;
            height: 55vh;
            background-color: white;
            box-shadow: rgba(27, 2, 167, 0.363) 0px 0px 5px 3px;
        }
        .form img{
            height: 18.1vh;
            width: 18vh;
            margin-left: 30%;
            margin-right: 30%;
            margin-top: -10.6vh;
            border-radius: 50%;
            border: 2px solid blue;
        }
        #login-btn{
            width: 50%;
            margin-left: 25%;
            margin-top: 6vh;
            height: 7vh;
            border: 1px solid blue;
            border-radius: 3px;
            font-size: 1.2rem;
            background-color: rgb(173, 255, 47);
        }
    </style>
</head>
<body>
    <div class="img">
        <img src="./images/background_img1.jpg" alt="" srcset="">
    </div>
    <div class="main">
        <h1>TechnoCAD</h1>
        <div class="form">
            <img src="./adminImg.PNG" alt="">
            <h2>Staff Login</h2>
            <h3>Enter Password :</h3>
            <input type="password" id="pass" onkeyup="check()">
            <button id="login-btn" onclick="login()">Login</button>
        </div>
    </div>
    <script>
        var data;
        const xhtt = new XMLHttpRequest();
        xhtt.open('GET',"returnData.php",true);
        xhtt.onload = function(){
            data = JSON.parse(this.responseText);
        }
        xhtt.send();
        function check(){
            let str = document.getElementById("pass").value;
            key=data[0].home_pass;
            if(str==key){
                //alert("password entered");
                //window.href("http://localhost/technocad/home.php");
                window.location.href = "http://localhost/technocad/home.php";
            }
        }
        function login(){
            alert("Incorrect Password");
        }
    </script>
</body>
</html>