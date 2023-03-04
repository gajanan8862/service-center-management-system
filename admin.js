
function show(){
    let box = document.getElementById("admin-box");
    box.classList.toggle("admin-box-show");
}
const xhttp = new XMLHttpRequest();
xhttp.open('GET',"adminBackend.php",true);
xhttp.onload = function(){
    var data = JSON.parse(this.responseText);
    document.getElementById("all-cust").innerText = data[1].total_cust;
    document.getElementById("latest-cust").innerText = "TCAD"+data[1].lst_cust;
    document.getElementById("lst-trans").innerText = data[1].lst_trans;
    document.getElementById("pend-amounts").innerText = data[0].pendings;
    document.getElementById("today-trans").innerText = (data.length)-2;
}
xhttp.send();

const xhr = new XMLHttpRequest();
xhr.open('GET',"home_util.php",true);
xhr.onload = function(){
    var info = JSON.parse(this.responseText);
    document.getElementById("cust-det").innerText = info.length;
}
xhr.send();

const xh = new XMLHttpRequest();
xh.open('GET',"all_trans.php",true);
xh.onload = function(){
    var infos = JSON.parse(this.responseText);
    document.getElementById("all-trans").innerText = infos.length;
}
xh.send();