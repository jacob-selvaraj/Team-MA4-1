

var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function Get(yourUrl){
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("GET",yourUrl,false);
    Httpreq.send(null);
    return Httpreq.responseText;          
}
//var data=JSON.parse(Get("http://localhost:8888/username"));
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var data=[{username:"selvaraj",password:"selva1234"},{username:"raj",password:"raj1234"}];
for(var i=0;i<data.length;i++)
{
if ( username == data[i].username && password == data[i].password){
alert ("Login successfully");
window.location = "standard.html"; // Redirecting to other page.
return false;
}

}
}

