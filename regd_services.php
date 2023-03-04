<?php

$cust_id = $_REQUEST["cust_id"];

$arr=array();

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$query = "SELECT * FROM `transaction` where cust_id = '$cust_id';";
$ress = $conn->query($query);
while($row = $ress->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);

?>