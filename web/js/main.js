function clicked(){
    window.alert("Clicked!");
}

function color(){
    var textColor = document.getElementById("newColor").value;
    var changeColor = textColor;
    
    var div_id = "div1";
    var div = document.getElementById(div_id);

    div.style.backgroundColor = changeColor;
}
