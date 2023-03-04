//User value login part
const xhttp = new XMLHttpRequest();
xhttp.open('GET',"home_util.php",true);
xhttp.onload = function(){
    let temp = document.getElementById("id_field").value;
    var data =JSON.parse(this.responseText);
    for(var i = 0; i < data.length; i++){
        if(data[i].cust_id == temp){
            document.getElementById("nm_field").value = data[i].name ;
            document.getElementById("mob_field").value = data[i].mobile ;
            document.getElementById("add_field").value = data[i].address ;
        }

    }
}
xhttp.send();
//user value login part



function submitFunc(){
    console.log("I am called now");
    let reg_no="23TCN2";
    var date = new Date();
    //var dttemp = date.getFullYear()+"-"+((date.getMonth())+1)+"-"+date.getDay();
    var reg_dt = date.getFullYear()+"-"+((date.getMonth())+1)+"-"+date.getDay();
    //console.log(dttemp); // "17/06/2022"
    let cust_id = document.getElementById("id_field").value;
    let purpose = document.getElementById("purpose").value;


    let mode = document.getElementById("mode").value;
    //let selectElement = document.querySelector('#mode');
    //let mode = selectElement.options[selectElement.selectedIndex].value;

    let tot_amt = document.getElementById("total_amt").value;
    let paid_amt = document.getElementById("paid_amt").value;
    let pend_amt = document.getElementById("pend_amt").value;
    let ref_no = document.getElementById("ref_no").value;
    let status = document.getElementById("status").value;
    let app_dt = document.getElementById("app_dt").value;
    let down_dt = document.getElementById("down_dt").value;
    let disp_dt = document.getElementById("disp_dt").value;
    let remark = document.getElementById("remark").value;
    
    //let sql = "INSERT INTO `transaction` (`reg_no`, `reg_dt`, `cust_id`, `purpose`, `mode`, `tot_amt`, `paid_amt`, `pend_amt`, `ref_no`, `status`, `app_dt`, `down_dt`, `disp_dt`, `remark`) VALUES (reg_no, reg_dt, cust_id, purpose, mode, tot_amt, paid_amt, pend_amt, ref_no, status, app_dt, down_dt, disp_dt, remark)";

    const xhr = new XMLHttpRequest();
    xhr.open('GET',"submit.php?reg_no="+reg_no+"&reg_dt="+reg_dt+"&cust_id="+cust_id+"&purpose="+purpose+"&mode="+mode+"&tot_amt="+tot_amt+"&paid_amt="+paid_amt+"&pend_amt="+pend_amt+"&ref_no="+ref_no+"&status="+status+"&app_dt="+app_dt+"&down_dt="+down_dt+"&disp_dt="+disp_dt+"&remark="+remark,true);
    xhr.onload = function(){
        alert("Service Registered");
    }
    xhr.send();


    /*
    console.log("cust_id = "+ cust_id);
    console.log("purpose = "+purpose);
    console.log("mode = "+mode);
    console.log("total amount ="+tot_amt);
    console.log("Paid amount = "+ paid_amt);
    console.log("Pending amount = "+pend_amt);
    console.log("Reference no = "+ref_no);
    console.log("Status = "+ status);
    console.log("Apply date = "+app_dt);
    console.log("Download date = "+down_dt);
    console.log("Dispatch date = "+disp_dt);
    console.log("Remark = "+remark);
*/

}

//INSERT INTO `transaction` (`reg_no`, `reg_dt`, `cust_id`, `purpose`, `mode`, `tot_amt`, `paid_amt`, `pend_amt`, `ref_no`, `status`, `app_dt`, `down_dt`, `disp_dt`, `remark`) VALUES ('reg_no', 'reg_dt', 'cust_id', 'purpose', 'mode', 'tot_amt', 'paid_amt', 'pend_amt', 'ref_no', 'status', 'app_dt', 'down_dt', 'disp_dt', 'remark')
