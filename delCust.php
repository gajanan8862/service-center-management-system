<?php

$cust_id = $_REQUEST["cust_id"];

//$arr=array();

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$query = "DELETE FROM `customer` where cust_id = '$cust_id';";
$conn->query($query);
$tot_cust = 0;
$sql = "SELECT * FROM `data`;";
$ress = $conn->query($sql);
while($row = mysqli_fetch_assoc($ress)){
    $tot_cust = $row['total_cust'];
    break;
}
$tot_cust = $tot_cust - 1;
$str = "UPDATE `data` SET `total_cust` = '$tot_cust' WHERE `data`.`sl` = 1;";
$conn->query($str);
$conn->close();
//while($row = $ress->fetch_assoc()){
    //array_push($arr,$row);
//}
//echo json_encode($arr);

?>