<?php

$arr=array();

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$query = "SELECT * FROM `transaction`;";
$ress = $conn->query($query);
while($row = $ress->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);

?>