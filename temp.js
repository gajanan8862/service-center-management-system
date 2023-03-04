console.log("Temp.js file is connected now");

//const btn = document.createElement("button");
//btn.setAttribute("class","demobtn");
//btn.innerHTML="I am a button";
//document.getElementById("registered-div").appendChild(btn);
var srs;

let cust_id = document.getElementById("id_field").value;
const arr = [];
const xh = new XMLHttpRequest();
xh.open('GET',"regd_services.php?cust_id="+cust_id,true);
xh.onload = function(){
    srs = JSON.parse(this.responseText);
    console.log(srs);
    for(var i = 0; i < srs.length; i++){



        const bt = document.createElement("button");
        bt.setAttribute("class","detailsbtn");
        bt.setAttribute("value",srs[i].reg_no);
        bt.setAttribute("onclick","func(this.value)");
        bt.innerHTML="Details";

        const srsdiv = document.createElement("div")
        const subdiv = document.createElement("div");

        const regiddiv = document.createElement("div");
        const regdtdiv = document.createElement("div");
        const pendamtdiv = document.createElement("div");
        const statusdiv = document.createElement("div");

        regiddiv.setAttribute("class","regiddiv");
        regdtdiv.setAttribute("class","regdtdiv");
        pendamtdiv.setAttribute("class","pendamtdiv");
        statusdiv.setAttribute("class","statusdiv");

        subdiv.appendChild(regiddiv);
        subdiv.appendChild(regdtdiv);
        subdiv.appendChild(pendamtdiv);
        subdiv.appendChild(statusdiv);
        srsdiv.setAttribute("class","srsdivs");
        subdiv.setAttribute("class","subdivs");
        srsdiv.appendChild(subdiv);
        srsdiv.appendChild(bt);

        regiddiv.innerHTML = "Reg. Number";
        const numtext = document.createElement("label");
        numtext.innerText = srs[i].reg_no;
        regiddiv.appendChild(numtext);

        regdtdiv.innerHTML = "Reg. Date";
        const dttext = document.createElement("label");
        dttext.innerText = srs[i].reg_dt;
        regdtdiv.appendChild(dttext);

        pendamtdiv.innerHTML = "Pending Amount";
        const amttext = document.createElement("label");
        amttext.innerText = srs[i].pend_amt;
        pendamtdiv.appendChild(amttext);

        statusdiv.innerHTML = "Status";
        const statustext = document.createElement("label");
        statustext.innerText = srs[i].status;
        statusdiv.appendChild(statustext);


        document.getElementById("registered-div").appendChild(srsdiv);



        console.log(srs[i].reg_dt);
        console.log(srs[i].reg_dt);
        console.log(srs[i].purpose);
        console.log(srs[i].pend_amt);
    }
}
xh.send();

var temp;
function func(temp){
    console.log("You clicked on "+temp);
    let sddiv = document.getElementById("service-details");
    sddiv.classList.add("show");

    let elementss = document.getElementsByClassName('input-field');
    for (let i = 0; i < elementss.length; i++) {
        elementss[i].readOnly = true;
    }

    //document.getElementById("reg-no-det").setAttribute("value","Gajanan");
    //let stringg = "Gajanan";
    document.getElementById("reg_no_det").value =temp ;
    console.log("This has to be loaded "+temp);
    for(var i = 0; i < srs.length; i++){
        if(temp == srs[i].reg_no){
            console.log("registration Date = "+srs[i].reg_dt);
            console.log("Purpose ="+srs[i].purpose);
            console.log("Mode ="+srs[i].mode);
            console.log("Total Amount ="+srs[i].tot_amt);
            console.log("Paid amount ="+srs[i].paid_amt);
            console.log("Pending amount ="+srs[i].pend_amt);
            console.log("Reference no ="+srs[i].ref_no);
            console.log("Status ="+srs[i].status);
            console.log("Appliction Date ="+srs[i].app_dt);
            console.log("Download Date ="+srs[i].down_dt);
            console.log("Dispatch Date ="+srs[i].disp_dt);
            console.log("Remark ="+srs[i].remark);

            document.getElementById("status-det").value = srs[i].status ;
            document.getElementById("purpose-det").value = srs[i].purpose ;
            document.getElementById("mode-det").value = srs[i].mode ;
            document.getElementById("ref-det").value = srs[i].ref_no ;
            document.getElementById("remark-det").value = srs[i].remark ;
            document.getElementById("tot-det").value = srs[i].tot_amt ;
            document.getElementById("paid-det").value = srs[i].paid_amt ;
            document.getElementById("pend-det").value = srs[i].pend_amt ;
            document.getElementById("reg-dt-det").value = srs[i].reg_dt ;
            document.getElementById("app-dt-det").value = srs[i].app_dt;
            document.getElementById("down-dt-det").value = srs[i].down_dt;
            document.getElementById("disp-dt-det").value = srs[i].disp_dt;

        }
    }

}




function hideDetails(){
    document.getElementById("service-details").classList.remove("show");
}