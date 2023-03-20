var modal1 = document.getElementById("informationmodal1");
var modal2 = document.getElementById("informationmodal2");
var modal3 = document.getElementById("informationmodal3");

var body = document.getElementById("body");
var button1 = document.getElementById("buttonone");
var button2 = document.getElementById("buttontwo");
var button3 = document.getElementById("buttonthree");



//var content1 = decument.getElementById("content1");

button1.onclick = function(){
    modal1.style.display = "block";
    body.style.filter = "blur(8px)";
}
button2.onclick = function(){
    modal2.style.display = "block";
    body.style.filter = "blur(8px)";
}

button3.onclick = function(){
    modal3.style.display = "block";
    body.style.filter = "blur(8px)";
}


window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
        body.style.filter = "none";

    }
    else
        if (event.target == modal2){
            modal2.style.display = "none";
            body.style.filter = "none";

        }
        else
            if (event.target == modal3){
                modal3.style.display = "none";
                body.style.filter = "none";

            }

}
