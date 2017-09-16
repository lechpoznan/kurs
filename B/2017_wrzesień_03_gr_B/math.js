/*var pi = Math.PI;
console.log(pi);

//pierwiastek
var pierwiastek = Math.sqrt(25);
console.log(pierwiastek);

var a = 13.2;
var b = 28.5;
var c = 30;

var minimalna = Math.min(a,b);
console.log(minimalna);
var maksymalna = Math.max(a,b,c);
console.log(maksymalna);
var zaokraglenie = Math.round(b);   //29
console.log(zaokraglenie);

var zaokMin = Math.round(minimalna);
console.log(zaokMin);


//abs, round, floor

var x = -56;
var y = -13.1;
var z = 14.9;

document.write('<br>' + Math.abs(x));   //56
document.write('<br>' + Math.abs(y));   //13.1
document.write('<br>' + Math.abs(z));   //14.9

document.write('<br>' + Math.round(x));   //-56
document.write('<br>' + Math.round(y));   //-13
document.write('<br>' + Math.round(z));   //15

document.write('<br>' + Math.floor(x));   //-56
document.write('<br>' + Math.floor(y));   //-14
document.write('<br>' + Math.floor(z)+'<br>');   //14

//potęgowanie

var p = Math.pow(2,10);
console.log(p);

//losowanie

var losuj = Math.random();
//document.write(losuj);

//losuj z przedziału <0;10>

//document.write(Math.floor(Math.random() * 11)+'<br>');


//losuj 10 liczb z przedziału <10;100>

for(var i = 1; i <= 10; i++){
    document.write(Math.floor(Math.random() * 91 + 10) +'<br>');
}*/
var elWyborPole = document.getElementById('pole'); 
var elWyborObwod = document.getElementById('obwod'); 
var elWyborObjetosc = document.getElementById('objetosc'); 
var elPromien = document.getElementById('promien');
var elWysokosc = document.getElementById('wysokosc');
var elWynik = document.getElementById('wynik');
var pi = Math.PI;
function oblicz(){
    var r = elPromien.value;
    var h = elWysokosc.value;
    if(elWyborPole.checked){
        var pole = pi * r * r;
        //var pole = pi * Math.pow(elPromien.value,2);
        elWynik.innerHTML = pole.toFixed(2) + 'cm<sup>2</sup>';
    }else if(elWyborObwod.checked){
        var obwod = 2 * pi * r;
        elWynik.innerHTML = obwod.toFixed(2) + 'cm';
    }else{
        var objetosc = pi * r * r * h;
        elWynik.innerHTML = objetosc.toFixed(2) + 'cm<sup>3</sup>';
    }
}






