<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation</title>
    <link rel="stylesheet" href="animate.css">
</head>
<body>
    <!--<button onclick="anim()" id="anim-btn">Animate</button>-->
    <div class="main-div">
        
        <div class="box1" id="box1">
            <img src="img2.jpg" alt="" id="lock1">
        </div>
        <div class="btn-box" id="btn-box">
            <input type="password" onkeyup="anim()" id="pass">
        </div>
        <div class="box2" id="box2">
            <img src="img1.jpg" alt="" srcset="" id="lock2">

        </div>

    </div>
    
</body>
<script>
    function anim(){
        let pass = document.getElementById("pass").value;
        console.log(pass);
        let key = "gajanan";
        if(pass==key){
        let btnbox = document.getElementById("btn-box");
        btnbox.classList.add("btn-anim");
        document.getElementById("pass").classList.add("btn-anim")
        let box1 = document.getElementById("box1");
        box1.classList.add("box1-anim");
        let box2 = document.getElementById("box2");
        box2.classList.add("box2-anim");
        }
    }
</script>
</html>