function add() {
var result =
Number(document.getElementById("firstnum").value) +
Number(document.getElementById("secnum").value);

window.alert("the answer is: " + result);
}
function subtract() {
var result =
Number(document.getElementById("firstnum").value) -
Number(document.getElementById("secnum").value);

window.alert("the answer is: " + result);
}
function multi() {
var result =
Number(document.getElementById("firstnum").value) *
Number(document.getElementById("secnum").value);

window.alert("the answer is: " + result);
}
function divi() {
var checked = document.getElementById("divcheck").checked;
var resultro;
var result =
Number(document.getElementById("firstnum").value) /
Number(document.getElementById("secnum").value);

if (checked == true) {
resultro = Math.round(result);
window.alert("the answer is: " + resultro);
} else window.alert("the answer is: " + result);
}
function lock()
  {

    var myWindow = window.open("./login.html", "MsgWindow", "width=500,height=auto");
    
    
  }