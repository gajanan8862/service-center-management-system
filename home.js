console.log("Javascript file is now connected");
const id_arr = [];
const nm_arr = [];
const mob_arr = [];
const add_arr = [];
const xhttp = new XMLHttpRequest();
xhttp.open('GET',"home_util.php",true);
xhttp.onload = function(){
    console.log("Processing completed");
    //console.log(this.responseText);
    var data =JSON.parse(this.responseText);
    //console.log(data[7].cust_id);
    //console.log(data.length);
    for(var i = 0; i < data.length; i++){
        id_arr.push(data[i].cust_id);
        nm_arr.push(data[i].name);
        mob_arr.push(data[i].address);
        add_arr.push(data[i].mobile);

    }
}
xhttp.send();


let temp;



function suggest(){
    document.getElementById("main-div").innerHTML="";
    let temp = document.getElementById("search").value;
    temp = temp.toLowerCase();// + temp.slice(1);
    if(temp.length>=1){
        console.log(temp);
        for(i=0;i<nm_arr.length;i++){
            if(nm_arr[i].includes(temp) || id_arr[i].includes(temp) || mob_arr[i].includes(temp)  ||add_arr[i].includes(temp)){
                const btn = document.createElement("button");
                const span1 = document.createElement("span");
                const span2 = document.createElement("span");
                const span3 = document.createElement("span");
                const span4 = document.createElement("span");
                btn.appendChild(span1);
                btn.appendChild(span2);
                btn.appendChild(span3);
                btn.appendChild(span4);
                span1.innerHTML = id_arr[i];
                span1.setAttribute("class","span1");
                span2.setAttribute("class","span2");
                span3.setAttribute("class","span3");
                span4.setAttribute("class","span4");
                span2.innerHTML = nm_arr[i];
                span3.innerHTML = mob_arr[i];
                span4.innerHTML = add_arr[i];
                btn.setAttribute("class","demobtn");
                btn.setAttribute("value",id_arr[i]);
                btn.setAttribute("onclick","func(this.value)");
                //btn.innerHTML=id_arr[i] +" "+ nm_arr[i] +" "+ mob_arr[i] +" "+ add_arr[i];
                document.getElementById("main-div").appendChild(btn);
            }
        }
    }

}

function loginUser(userid){
    console.log("i received"+userid);
    var form = document.createElement('form');
    form.setAttribute('method','post');
    form.setAttribute('action','http://localhost/technocad/registration.php');

    var hiddenField = document.createElement('input');
    hiddenField.setAttribute('type','hidden');
    hiddenField.setAttribute('name','userid');
    hiddenField.setAttribute('value',userid);

    form.appendChild(hiddenField);
    document.body.appendChild(form);
    form.submit();
}


function func(temp){
    console.log(temp);
    loginUser(temp);
    
}
