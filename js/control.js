var btn = document.getElementsByClassName("TabbedPanelsTabSelected");
var tmp = document.getElementsByClassName("con");
for (var i = 0 ; i < 2 ; i++){
    btn[i].addEventListener("click",show_content,false);
}

function show_content(){
    for (var j=0 ; j<2 ; j++){
        tmp[j].className = "con "+j+" hidden";
    }
    tmp[event.target.id].className = "con "+event.target.id;

}
