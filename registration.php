<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Register a service"; ?></title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="main-container">
        <div class="technocad-title">
            TechnoCAD
        </div>
        <div class="left-container">
            <div class="nav">
                <button id="btn-1" onclick="div1Display()">Register a service</button>
                <button id="btn-2" onclick="div2Display()">Registered Services</button>
            </div>
            <div class="register" id="register-div">

                <form action="" id="myForm1">
                    <div class="div11">
                        <div class="detail-title inner-title">&nbsp;Details &nbsp;</div>
                        <input type="text" id="purpose" name="purpose" placeholder="Purpose">
                        <div class="mode-select">
                            <label for="mode" id="mode-label">Select Mode :</label>
                            <select name="mode" id="mode">
                                <option value="center">Center</option>
                                <option value="banking">Banking</option>
                                <option value="marketing">Marketing</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <input type="text" name="ref_no" id="ref_no" placeholder="Reference No.">
                        <input type="text" name="status" id="status" placeholder="Status">
                    </div>
                    <div class="div22">
                        <div class="payment-title inner-title">&nbsp;Payment&nbsp; </div>
                        <input type="text" name="tot_amt" id="total_amt" placeholder="Total Amount">
                        <input type="text" name="paid_amt" id="paid_amt" placeholder="Paid Amount" onchange="fill()">
                        <input type="text" name="pend_amt" id="pend_amt" placeholder="Pending Amount">
                    </div>
                    <div class="div33">
                        <div class="date-title inner-title">&nbsp;Dates&nbsp; </div>
                        <div class="dt-input"><label for="app_dt">Apply Dt. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</label><input type="date" name=app_dt" id="app_dt"></div>
                        <div class="dt-input"><label for="down_dt">Download Dt. :&nbsp;&nbsp;&nbsp; </label><input type="date" name="down_dt" id="down_dt"></div>
                        <div class="dt-input"><label for="disp_dt">Dispatch Dt. &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</label><input type="date" name="" id="disp_dt"></div>
                    </div>
                    <div class="div44">
                        <div class="remark-title inner-title">&nbsp;Remark&nbsp;</div>
                        <input type="text" name="remark" id="remark" placeholder="Remark. If any...">
                    </div>
                    <div class="button-bar">
                        <input type="button" value="Submit" name="submit" id="submit" onclick="submitFunc()">
                        <input type="reset" value="Clear" name="cancel" id="cancel">
                    </div>
                </form>
                    






            </div>
            <div class="registered" id="registered-div">
                <div class="service-details" id="service-details">
                <div class="head-div">
                    <center><h1>TechnoCAD</h1></center>
                    <center>At/Po- Bhukta, Dist - Bargarh, Odisha , PIN - 768045</center>
                </div>
                <!--<button onclick="hideDetails()" class="hide-btn">X</button>-->

                
                <div class="gen">                

                <label for="ref-det" >Purpose &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
                <input type="text" id="purpose-det"  class="input-field" placeholder="Purpose"><br/>

                <label for="mode-det" id="mode-label" >Mode &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <select name="mode" id="mode-det" class="input-field" >
                    <option value="center">Center</option>
                    <option value="banking">Banking</option>
                    <option value="marketing">Marketing</option>
                    <option value="others">Others</option>
                </select><br/>

                <label for="ref-det">Reference&nbsp;&nbsp; : </label>
                <input type="text"  id="ref-det" class="input-field" placeholder="Reference Number"><br/>

                <label for="status-det">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <input type="text"  id="status-det" class="input-field" placeholder="Status"><br/>
                </div>

                <div class="reg-det">
                    <label for="reg_no_det">Reg. No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <input type="text"  id="reg_no_det" placeholder="Registration number" class="input-field"><br>

                <label for="reg-dt-det">Reg. Date &nbsp;&nbsp;&nbsp;: </label>
                <input type="date"  id="reg-dt-det" class="input-field">
                <div>
                    <label for="remark-det">Remark &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text"  id="remark-det" class="input-field">
                </div>
                </div>

                <div class="payment">
                <label for="tot-det">Total Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <input type="text"  id="tot-det" class="input-field" placeholder="Total amount"><br/>

                <label for="paid-det">Paid Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <input type="text"  id="paid-det" class="input-field" placeholder="Paid Amount"><br/>

                <label for="pend-det">Pending Amount &nbsp;&nbsp;: </label>
                <input type="text"  id="pend-det" class="input-field" placeholder="Pending Amount"><br/>
                </div>

                
                
                <div class="all-dates">

                    <label for="app-dt-det">Apply Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input  type="date" id="app-dt-det" class="input-field"><br>

                    <label for="down-dt-det">Download Date &nbsp;&nbsp;: </label>
                    <input  type="date" id="down-dt-det" class="input-field"><br>

                    <label for="disp-dt-det">Dispatch Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input  type="date" id="disp-dt-det" class="input-field"><br>
                </div>

                <div class="buttons-div">
                    <button onclick="myFunc()">Edit</button>
                    <button onclick="updateDet()">Save</button>
                    <button onclick="hideDetails()">Close</button>
                </div>

                </div>
            </div>
        </div>
        <div class="right-container">
            <img src="images/user-icon.png" alt="" class="user-icon">
            <input id="id_field" readonly type="text" placeholder="id" value="<?php $id=$_POST['userid'];echo $id;?>">
            <input id="nm_field" readonly type="text" placeholder="Name" value="<?php $str = "Gajanan"; echo $str; ?>">
            <input id="mob_field" readonly type="text" placeholder="Mobile">
            <input id="add_field" readonly type="text" placeholder="Address">
            <a href="http://localhost/technocad/home.php"><input type="button" value="Logout" id="logout-btn"></a>
        </div>
    </div>
    <script src="abc.js"></script>
    <script src="test.js"></script>
    <script src="temp.js"></script>
    <script src="registration.js"></script>
    <script>
        function fill(){
            let a = document.getElementById("total_amt").value;
            let b = document.getElementById("paid_amt").value;
            document.getElementById("pend_amt").value = a-b;
        }
    </script>
    <script>
        function updateDet(){
            let reg_no = document.getElementById("reg_no_det").value;
            let reg_dt = document.getElementById("reg-dt-det").value;
            let purpose = document.getElementById("purpose-det").value;
            let mode = document.getElementById("mode-det").value;
            let tot_amt = document.getElementById("tot-det").value;
            let paid_amt = document.getElementById("paid-det").value;
            let pend_amt = document.getElementById("pend-det").value;
            let ref_det = document.getElementById("ref-det").value;
            let status = document.getElementById("status-det").value;
            let app_dt = document.getElementById("app-dt-det").value;
            let down_dt = document.getElementById("down-dt-det").value;
            let disp_dt = document.getElementById("disp-dt-det").value;
            let remark = document.getElementById("remark-det").value;

            console.log(reg_no);
            console.log("Update function");
            const xhr = new XMLHttpRequest();
            xhr.open("GET","updateDet.php?reg_no="+reg_no+"&reg_dt="+reg_dt+"&purpose="+purpose+"&mode="+mode+"&tot_amt="+tot_amt+
            "&paid_amt="+paid_amt+"&pend_amt="+pend_amt+"&ref_det="+ref_det+"&status="+status+"&app_dt="+app_dt+"down_dt="+down_dt+"&disp_dt="+disp_dt+"&remark="+remark ,true);
            xhr.onload=function(){
                alert("details updated");
            }
            xhr.send();
        }
    </script>
</body>
</html>