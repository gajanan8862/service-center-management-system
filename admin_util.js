let box10 = document.getElementById("box9");
let box9 = document.getElementById("box10");
let box8 = document.getElementById("box8");
let box7 = document.getElementById("box7");
let box6 = document.getElementById("box6");
let box5 = document.getElementById("box5");
let box4 = document.getElementById("box4");
let box3 = document.getElementById("box3");
let box2 = document.getElementById("box2");
let box1 = document.getElementById("box1");
let ele;
function openPopup(ele){
    box1.classList.remove("display-box");
    box2.classList.remove("display-box");
    box3.classList.remove("display-box");
    box4.classList.remove("display-box");
    box5.classList.remove("display-box");
    box6.classList.remove("display-box");
    box7.classList.remove("display-box");
    box8.classList.remove("display-box");
    box9.classList.remove("display-box");
    box10.classList.remove("display-box");
    document.getElementById(ele).classList.add("display-box");
}

let boxx;
function closePopup(boxx){
    document.getElementById(boxx).classList.remove("display-box");
}

