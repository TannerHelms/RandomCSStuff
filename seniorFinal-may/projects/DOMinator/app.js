const inputs = document.querySelectorAll("input");
const page = document.getElementById("page");
let attribute;
let value;
let ele;
let parent = page;
function create_Ele(){
    if(inputs[0].value){
    ele = document.createElement(inputs[0].value);
    }
    else{
        ele = document.createElement("div");
    }
    for(i = 1; i < inputs.length; i++){
        attributeSet(inputs[i]);
    }

    console.log(ele);
    /*for(i=0; i< inputs.length-1; i++){
      
    }*/
    console.log(parent);
parent.appendChild(ele);   
}
function attributeSet(att){

    attribute = att.getAttribute("placeholder");
    if(attribute == "parent id"){
        console.log("In if statement");
        if(att.value != ''){
            console.log("Setting parent");
       parent = document.getElementById(att.value);
       return; 
    }
    else{
        parent = page;
    }
}
    value = att.value;
    if(value){
    ele[attribute] = value;
    }

}


function resetForm(){
    console.log("Reset");
    for(i = 0; i < inputs.length; i++){
        inputs[i].value = "";
    }
}
function deleteElement(){
    child = parent.lastChild;
    if(child){
    parent.removeChild(child);
    }
    else{
        console.log("No more elements to remove!");
    }
}
function disappear(){
    let wrap = document.getElementById("wrap");
    wrap.className = "d-none";
    let button = document.createElement("button");
    let text = document.createTextNode("Click here to get the form back");
    button.appendChild(text);
    button.setAttribute("class", "btn btn-info");
    button.setAttribute("onclick", "reappear()");

    page.appendChild(button);
}
function reappear(){
    let wrap = document.getElementById("wrap");
    wrap.className = "d-show";
    page.removeChild(page.lastChild);
}
