console.log("Test javascript file is now connected");
function myFunc(){
    console.log(" Gajanan");
    let elements = document.getElementsByClassName('input-field');
    for (let i = 0; i < elements.length; i++) {
    //elements[i].setAttribute("readonly");
    //document.getElementById("myText").readOnly = true;
    elements[i].readOnly = false;
    }
}