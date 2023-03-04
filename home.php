<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="test1.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Roboto+Slab:wght@900&family=Rowdies:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <div class="img-sec">
        <img src="./images/bg4.jpg" alt="">
    </div>
    <div class="main-container">
        <!--<div class="lock" id="lock">
        
            <div class="box1" id="divv1">
            <img src="lck1.jpg" alt="" id="lock1">
            </div>
            <div class="btn-box" id="btn-box">
            <input type="password" onkeyup="anim()" id="home-pass">
            </div>
            <div class="box2" id="divv2">
            <img src="lck2.jpg" alt="" srcset="" id="lock2" class="lck2">
            </div>
        </div>-->

        <div class="technocad-title">
            TechnoCAD
        </div>
        <input type="text" name="" id="search" onkeyup="suggest()" autocomplete="off" placeholder="Search user..."">
        <div class="main-div" id="main-div">

        </div>
        <div class="next-div">
            <div class="txt">
            New user ? Create a profile.
            </div>
            <button onclick="showForm()" class="crt-prf">Create Profile</button>
        </div>
        <div class="create-profile" id="userform">
            <input type="button" value="X" id="cancel-create" onclick="hideForm()">
            <span id="crt-usr-title">Create New User</span>
            <input type="text" id="usernm" placeholder="name">
            <input type="text" name="" id="useradd" placeholder="address">
            <input type="text" name="" id="usermob" placeholder="mobile">
            <input type="button" value="CREATE USER" id="crt-usr" onclick="createUser()">   
        </div>
    </div>
    
    <script src="home.js"></script>
    <script>
        function showForm(){
    document.getElementById("userform").classList.add("visible-form");
    }

    function hideForm(){
        document.getElementById("userform").classList.toggle("visible-form");
    }

    function createUser(){
        let user_nm = document.getElementById("usernm").value;
        let user_add = document.getElementById("useradd").value;
        let user_mob = document.getElementById("usermob").value;

        //const str2 = str.charAt(0).toUpperCase() + str.slice(1);
        user_nm = user_nm.toLowerCase();// + user_nm.slice(1);
        user_add = user_add.toLowerCase();// + user_add.slice(1);


        console.log(user_nm);
        console.log(user_add);
        console.log(user_mob);

        const xhr = new XMLHttpRequest();
        xhr.open('GET',"createUser.php?user_nm="+user_nm+"&user_add="+user_add+"&user_mob="+user_mob,true);
        xhr.onload = function(){
            console.log("New user created");
            alert("New User Created . USER ID = "+this.responseText);
            window.location.reload();
        }
        xhr.send();
    }
    </script>
    <script>
            var data;
            const xhtt = new XMLHttpRequest();
            xhtt.open('GET',"returnData.php",true);
            xhtt.onload = function(){
                data = JSON.parse(this.responseText);
            }
            xhtt.send();
            function anim(){
                let pass = document.getElementById("home-pass").value;
                key=data[0].home_pass;
            
                if(pass==key){
                
                let btnbox = document.getElementById("btn-box");
                btnbox.classList.add("btn-anim");
                document.getElementById("home-pass").classList.add("btn-anim")
                let divv1 = document.getElementById("divv1");
                divv1.classList.add("box1-anim");
                let divv2 = document.getElementById("divv2");
                divv2.classList.add("box2-anim");
                setTimeout(()=> {
                    document.getElementById("lock").classList.add("invisible");
                }
                ,5300);
                }   
            }
    </script>
</body>
</html>