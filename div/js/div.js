"use strict"

let buttons = document.querySelectorAll('button');
let i = 0;
for(let btn of buttons){
    let div = 'myDiv' + i;
    btn.addEventListener("click", function(){
        toggleDiv(div);
    });
    i++;
}


function toggleDiv(divId){
    let div = document.getElementById(divId);
    if (div.className == "visible")
        div.className = "invisible";
    else
        div.className = "visible";
}