<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="shortcut icon" href="./images/letter-t-icon-png-11482-Windows.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="tiny.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>
    <div class="container">

    <div class="lock" id="lock">
        
        <div class="box1" id="divv1">
            <img src="img2.jpg" alt="" id="lock1">
        </div>
        <div class="btn-box" id="btn-box">
            <input type="password" onkeyup="anim()" id="admin-pass">
        </div>
        <div class="box2" id="divv2">
            <img src="img1.jpg" alt="" srcset="" id="lock2">

        </div>

    </div>

        <div class="technocad-title">
            TechnoCAD
             <button id="admin-btn" onclick="show()"></button>
             <div id="admin-nm">Admin Name</div>
             
        </div>
        <div class="admin-box" id="admin-box">

                <div class="admin-img"><img src="adminImg.PNG" id="admin-img"></div>
                <div class="admin-nm">Admin Name</div>
                <button onclick="openPopup('box9')">Change Admin Password</button>
                <button onclick="openPopup('box10')">Change Login Password</button>
                <button onclick="show()">Close</button>

        </div>
        <div class="main">
            
            <div class="div" onclick="openPopup('box1')">
                <img src="box1.png" alt="">
                <div class="text">ALL CUSTOMERS</div>
                <div id="all-cust"></div>
            </div>
            <div class="div" onclick="openPopup('box2')">
                <img src="box8.png" alt="" srcset="">
                <div class="text">all transaction</div>
                <div id="all-trans"></div>
            </div>
            <div class="div" onclick="openPopup('box3')">
                <img src="box5.png" alt="" srcset="">
                <div class="text">today transactions</div>
                <div id="today-trans"></div>
            </div>
            <div class="div" onclick="openPopup('box4')">
                <img src="box6.png" alt="" srcset="">
                <div class="text">pending amounts</div>
                <div id="pend-amounts"></div>
            </div>
            <div class="div" onclick="openPopup('box5')">
                <img src="box4.png" alt="" srcset="">
                <div class="text">view customer deatil</div>
                <div id="cust-det"></div>
            </div>
            <div class="div" onclick="openPopup('box6')">
                
                <img src="box2.png" alt="" srcset="">
                <div class="text">delete a customer</div>

            </div>
            <div class="div" onclick="openPopup('box7')">
                <img src="box7.png" alt="" srcset="">
                <div class="text">Latest Customer</div>
                <div id="latest-cust"></div>
            </div>
            <div class="div" onclick="openPopup('box8')">
                <img src="box3.png" alt="">
                <div class="text">Latest Transaction</div>
                <div id="lst-trans"></div>
            </div>
        </div>


        <div class="admin-pass-box hidden-box" id="box9">
            <div class="close"><button onclick="closePopup('box9')">X</button></div>
            <h2>Change Admin Password</h2>
            <div><span>Enter admin password &nbsp;: &nbsp;&nbsp;</span><input type="password" suggestion="off"></div>
            <div><span>Enter New Password &nbsp;&nbsp; : &nbsp;&nbsp;</span><input type="password" suggestion="off"></div>
            <div><span>New Password Again &nbsp;&nbsp;: &nbsp;&nbsp;<input type="password" suggestion="off"></span></div>
            <button id="admin-pass-chng-btn">Change Password</button>

        </div>

        <div class="login-pass-box hidden-box" id="box10">
        <div class="close"><button onclick="closePopup('box10')">X</button></div>
            <h2>Change Login Password</h2>
            <div><span>Enter Login password &nbsp;: &nbsp;&nbsp;</span><input type="password" suggestion="off"></div>
            <div><span>Enter New Password &nbsp;&nbsp; : &nbsp;&nbsp;</span><input type="password" suggestion="off"></div>
            <div><span>New Password Again &nbsp;&nbsp;: &nbsp;&nbsp;<input type="password" suggestion="off"></span></div>
            <button id="login-pass-chng-btn">Change Password</button>
        </div>

        <div class="hidden-box" id="box1">

            <div class="close"><button onclick="closePopup('box1')">X</button></div>

            <h2>CUSTOMERS DETAILS</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            $query = "SELECT * FROM `customer`;";
            $ress = $conn->query($query);
            echo "<table>";
            echo "<tr>";

            echo "<th>Cust Id</th>";
            echo "<th>Name</th>";
            echo "<th>Address</th>";
            echo "<th>mobile</th>";
            

            echo "</tr>";
                
            while($row = $ress->fetch_assoc()){
            
                echo "<tr>";
                echo "<td>".$row['cust_id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['mobile']."</td>";
                echo "</tr>";
             
            }
            echo "</table>";
            $conn->close();

            ?>

        </div>

        <div class="hidden-box" id="box2">
            <div class="close"><button onclick="closePopup('box2')">X</button></div>
            <h2>All Transactions</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            $query = "SELECT * FROM `transaction`;";
            $ress = $conn->query($query);
            echo "<table>";
            echo "<tr>";

            echo "<th>PURPOSE</th>";
            echo "<th>Cust ID</th>";
            echo "<th>Reg. Date</th>";
            echo "<th>Amount</th>";
            

            echo "</tr>";
                
            while($row = $ress->fetch_assoc()){
            
                echo "<tr>";
                echo "<td>".$row['purpose']."</td>";
                echo "<td>".$row['cust_id']."</td>";
                echo "<td>".date('d-m-Y',strtotime($row['reg_dt']))."</td>";
                echo "<td>".$row['tot_amt']."</td>";
                echo "</tr>";
             
            }
            echo "</table>";
            $conn->close();

            ?>
        </div>

        <div class="hidden-box" id="box3">
            <div class="close"><button onclick="closePopup('box3')">X</button></div>
            <h2>Today's Transactions</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            date_default_timezone_set("Asia/Calcutta");
            $query = "SELECT * FROM `transaction` WHERE reg_dt = CURRENT_DATE;";
            $ress = $conn->query($query);
            $lengthh = mysqli_num_rows(($ress));
            if($lengthh>=1){
            echo "<table>";
            echo "<tr>";

            echo "<th>PURPOSE</th>";
            echo "<th>Cust ID</th>";
            echo "<th>Reg. Date</th>";
            echo "<th>Amount</th>";
            

            echo "</tr>";
                
            while($row = $ress->fetch_assoc()){
            
                echo "<tr>";
                echo "<td>".$row['purpose']."</td>";
                echo "<td>".$row['cust_id']."</td>";
                echo "<td>".date('d-m-Y',strtotime($row['reg_dt']))."</td>";
                echo "<td>".$row['tot_amt']."</td>";
                echo "</tr>";
             
            }
            echo "</table>";
            }else{
                echo "<br/><br/><br/><br/><br/><br/><br/><h2>No Transactions</h2>";
            }
            $conn->close();

            ?>

        </div>

        <div class="hidden-box" id="box4">
            <div class="close"><button onclick="closePopup('box4')">X</button></div>
            <h2>Pending Amount</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            date_default_timezone_set("Asia/Calcutta");
            $query = "SELECT * FROM `transaction` WHERE pend_amt > 0;";
            $resultt = $conn->query($query);
            echo "<table>";
            echo "<tr>";

            echo "<th>PURPOSE</th>";
            echo "<th>Cust ID</th>";
            echo "<th>Reg. Date</th>";
            echo "<th>Pend. Amount</th>";
            

            echo "</tr>";
              
            while($row = $resultt->fetch_assoc()){
            
                echo "<tr>";
                echo "<td>".$row['purpose']."</td>";
                echo "<td>".$row['cust_id']."</td>";
                $reg_dtt = date('d-m-Y',strtotime($row['reg_dt']));
                echo "<td>".$reg_dtt."</td>";//date('d-m-Y',)
                echo "<td>".$row['pend_amt']."</td>";
                echo "</tr>";
             
            }
            echo "</table>";
            $conn->close();

            ?>

        </div>

        <div class="hidden-box" id="box5">
            <div class="close"><button onclick="closePopup('box5')">X</button></div>
            <h2>Search A customer</h2>
            <div><input type="text" id="cust_id_field1" placeholder="Enter Cust ID"><button onclick="getCust1()" id="find-btn">Find</button> </div>
            <div><span>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Name" id="cust_nm_1"></div>
            <div><span>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Address" id="cust_add_1"></div>
            <div><span>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Mobile" id="cust_mob_1"></div>
            <!--<div><span>Transactions &nbsp;: </span><input type="text" placeholder="Transactions"></div>
            <div><span>Pending Bal &nbsp;: </span><input type="text" placeholder="Pending amount"></div>-->

        </div>

        <div class="hidden-box" id="box6">
            <div class="close"><button onclick="closePopup('box6')">X</button></div>
             <h2>Delete A Customer</h2> 
             <div><input type="text" id="cust_id_field2" placeholder="Enter Cust ID"><button onclick="getCust2()" id="find-btn">Find</button> </div>
            <div><span>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Name" id="cust_nm_2"></div>
            <div><span>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Address" id="cust_add_2"></div>
            <div><span>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type="text" placeholder="Mobile" id="cust_mob_2"></div>

            <!--<span>Transactions &nbsp;: </span><input type="text" placeholder="Transactions">
            <span>Pending Bal &nbsp;: </span><input type="text" placeholder="Pending amount">-->
            <button onclick="delCust()" id="dlt-btn">DELETE</button>
            

        </div>

        <div class="hidden-box" id="box7">
            <div class="close"><button onclick="closePopup('box7')">X</button></div>
            <h2>Latest Customer</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            $query = "SELECT * FROM customer ORDER BY sl DESC;";
            $ress = $conn->query($query);
            $temp =  mysqli_num_rows($ress);
            $i=1;
            while($row = $ress->fetch_assoc()){
                    echo "<div><span>ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['cust_id']."'></div>";
                    echo "<div><span>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['name']."'></div>";
                    echo "<div><span>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['mobile']."'></div>";
                    echo "<div><span>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['address']."'></div>";
                    break;
                
            }

            $conn->close();

            ?>
        </div>

        <div class="hidden-box" id="box8">
            <div class="close"><button onclick="closePopup('box8')">X</button></div>
            <h2>Latest Transaction</h2>
            <?php

            $conn=mysqli_connect("localhost","root","","technocad");
            if($conn-> connect_error){
                die("connection failed :".$conn->connect_error);
            }
            $query = "SELECT * FROM `transaction` ORDER BY sl DESC;";
            $ress = $conn->query($query);
            $temp =  mysqli_num_rows($ress);
            $i=1;
            while($row = $ress->fetch_assoc()){
                    echo "<div><span>Custmer ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['cust_id']."'></div>";
                    echo "<div><span>Purpose &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['purpose']."'></div>";
                    echo "<div><span>Registration Date &nbsp;: </span><input type='text' readonly value='".$row['reg_dt']."'></div>";
                    echo "<div><span>Total Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><input type='text' readonly value='".$row['tot_amt']."'></div>";
                    break;
            }

            $conn->close();

            ?>
        </div>


    </div>
    <script src="admin.js"></script>
    <script src="admin_util.js"></script>
    <script>
        var data;
        const xhtt = new XMLHttpRequest();
        xhtt.open('GET',"returnData.php",true);
        xhtt.onload = function(){
            data = JSON.parse(this.responseText);
        }
        xhtt.send();
        function anim(){
            let pass = document.getElementById("admin-pass").value;
            key=data[0].admin_pass;
        
            if(pass==key){
            let btnbox = document.getElementById("btn-box");
            btnbox.classList.add("btn-anim");
            document.getElementById("admin-pass").classList.add("btn-anim")
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
    <script>
        function getCust1(){
        let cust_idd = document.getElementById("cust_id_field1").value;
        const xhh = new XMLHttpRequest();
        xhh.open('GET',"custDet.php?cust_id="+cust_idd,true);
        xhh.onload = function(){
            var data = JSON.parse(this.responseText);
            document.getElementById("cust_nm_1").value=data[0].name;
            document.getElementById("cust_add_1").value=data[0].address;
            document.getElementById("cust_mob_1").value=data[0].mobile;

        }
        xhh.send();

        }

        function getCust2(){
        let cust_iddd = document.getElementById("cust_id_field2").value;
        const xht = new XMLHttpRequest();
        xht.open('GET',"custDet.php?cust_id="+cust_iddd,true);
        xht.onload = function(){
            var datas = JSON.parse(this.responseText);
            document.getElementById("cust_nm_2").value=datas[0].name;
            document.getElementById("cust_add_2").value=datas[0].address;
            document.getElementById("cust_mob_2").value=datas[0].mobile;
        }
        xht.send();
        }

        function delCust(){
            let id = document.getElementById("cust_id_field2").value;
            const xhtt = new XMLHttpRequest();
            xhtt.open('GET',"delCust.php?cust_id="+id,true);
            xhtt.onload = function(){
                //var datas = JSON.parse(this.responseText);
                alert("Customer record deleted");
                //window.location.replace("http://localhost/technocad/admin.php");
            }
            xhtt.send();
        }
    </script>
</body>
</html>