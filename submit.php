<?php

//$reg_no = $_REQUEST["reg_no"];
$reg_dt = $_REQUEST["reg_dt"];
$cust_id = $_REQUEST["cust_id"];
$purpose = $_REQUEST["purpose"];
$mode = $_REQUEST["mode"];
$tot_amt = $_REQUEST["tot_amt"];
$paid_amt = $_REQUEST["paid_amt"];
$pend_amt = $_REQUEST["pend_amt"];
$ref_no = $_REQUEST["ref_no"];
$status = $_REQUEST["status"];
$app_dt = $_REQUEST["app_dt"];
$down_dt = $_REQUEST["down_dt"];
$disp_dt = $_REQUEST["disp_dt"];
$remark = $_REQUEST["remark"];
/*
$reg_no = "reg12";
$reg_dt = "2023-1-2";
$cust_id = "cid10";
$purpose = "pancard";
$mode = "center";
$tot_amt = 200;
$paid_amt = 100;
$pend_amt = 100;
$ref_no = "rf10";
$status = "okk";
$app_dt = "2020-10-12";
$down_dt = "2020-11-12";
$disp_dt = "2020-10-12";
$remark = "no remark";
*/

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$query = "SELECT `lst_trans` FROM `data`;";
$ress = $conn->query($query);
while($row=$ress->fetch_assoc()){
    $str = $row['lst_trans'];
    break;
}
$temp = 0;
$temp = substr($str,5);
$temp++;
$reg_no = "23TCN".$temp;
date_default_timezone_set("Asia/Calcutta");
$reg_dt = date("Y-m-d");
//$mode = "camp";
$sql = "INSERT INTO `transaction` (`reg_no`, `reg_dt`, `cust_id`, `purpose`, `mode`, `tot_amt`, `paid_amt`, `pend_amt`, `ref_no`, `status`, `app_dt`, `down_dt`, `disp_dt`, `remark`) VALUES ('$reg_no', '$reg_dt', '$cust_id', '$purpose', '$mode', '$tot_amt', '$paid_amt', '$pend_amt', '$ref_no', '$status', '$app_dt', '$down_dt', '$disp_dt', '$remark');";
$qr = "UPDATE `data` SET `lst_trans` = '$reg_no' WHERE `data`.`sl` = 1";
$conn->query($qr);
$res = $conn->query($sql);
echo json_encode($res);


?>