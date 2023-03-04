<?php
$reg_no = $_REQUEST["reg_no"];
$reg_dt = $_REQUEST["reg_dt"];
//$cust_id = $_REQUEST["cust_id"];
$purpose = $_REQUEST["purpose"];
$mode = $_REQUEST["mode"];
$tot_amt = $_REQUEST["tot_amt"];
$paid_amt = $_REQUEST["paid_amt"];
$pend_amt = $_REQUEST["pend_amt"];
$ref_no = $_REQUEST["ref_det"];
$status = $_REQUEST["status"];
$app_dt = $_REQUEST["app_dt"];
$down_dt = $_REQUEST["down_dt"];
$disp_dt = $_REQUEST["disp_dt"];
$remark = $_REQUEST["remark"];

//UPDATE `transaction` SET `reg_dt` = '2023-02-17', `purpose` = 'pancard name updates', `mode` = 'centera', `tot_amt` = '5004', `paid_amt` = '1004', `pend_amt` = '4003', `ref_no` = 'ref122', `status` = 'okay2', `app_dt` = '2023-02-22', `down_dt` = '2023-02-17', `disp_dt` = '2023-02-10', `remark` = 'paid by phone payw' WHERE `transaction`.`reg_no` = '23TCN2'

$conn=mysqli_connect("localhost","root","","technocad");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}

$sql = "UPDATE `transaction` SET `reg_dt` = '$reg_dt', `purpose` = '$purpose', `mode` = '$mode', `tot_amt` = '$tot_amt', `paid_amt` = '$paid_amt', `pend_amt` = '$pend_amt', `ref_no` = '$ref_no', `status` = '$status', `app_dt` = '$app_dt', `down_dt` = '$down_dt', `disp_dt` = '$disp_dt', `remark` = '$remark' WHERE `transaction`.`reg_no` = '$reg_no';";
$conn->query($sql);
$conn->close();


?>