<?php
    $conn=mysqli_connect("localhost","root","","technocad");
    if($conn-> connect_error){
        die("connection failed :".$conn->connect_error);
    }
    $arr=array();
    $sql ="SELECT * FROM `data`";
    $qr = "SELECT SUM(pend_amt) AS pendings FROM transaction;";
    $ress = $conn -> query($qr);
    while($roww = $ress->fetch_assoc()){
        array_push($arr,$roww);
        break;
    }
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        array_push($arr,$row);
        break;
    }

    $sql3 = "SELECT * FROM `transaction` WHERE reg_dt = CURRENT_DATE;";
    $result3 = $conn -> query($sql3);
    while($row3 = $result3->fetch_assoc()){
        array_push($arr,$row3);
    }


    echo json_encode($arr);
?>