let div1 = document.getElementById("register-div");
let div2 = document.getElementById("registered-div");
div1.classList.add("display-block");
console.log("Javascript file is connected");
function div1Display(){
    div1.classList.add("display-block");
    div2.classList.remove("display-block");
}
function div2Display(){
    div2.classList.add("display-block");
    div1.classList.remove("display-block");
}