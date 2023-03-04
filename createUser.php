<?php

$user_nm = $_REQUEST["user_nm"];
$user_add = $_REQUEST["user_add"];
$user_mob = $_REQUEST["user_mob"];

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}

$query = "SELECT `lst_cust` FROM `data`;";
$ress = $conn->query($query);
while($row=$ress->fetch_assoc()){
    $temp = $row['lst_cust'];
    break;
}

$temp++;
$user_id = "TCAD" . $temp;

//$sql = "INSERT INTO `customer` (`cust_id`, `name`, `address`, `mobile`) VALUES ('$user_id', '$user_nm', '$user_add', '$user_mob'";

$sql= "INSERT INTO `customer` (`cust_id`, `name`, `address`, `mobile`) VALUES ('$user_id', '$user_nm', '$user_add', '$user_mob')";
$qr = "UPDATE `data` SET `lst_cust` = '$temp' WHERE `data`.`sl` = 1";

$conn->query($sql);
$conn->query($qr);

echo $user_id;

?>