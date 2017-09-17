var pi = Math.PI;
document.write(pi + '<br>');
console.log(pi);

//pierwiastek

var pierwiastek = Math.sqrt(25);
console.log(pierwiastek);
document.write('Pierwiastek: ' + pierwiastek + '<br>');

var a = 13.2;
var b = 28.5;
var c = 30;

var minimalna = Math.min(a,b,c);
var maksymalna = Math.max(a,b,c);
console.log('Minimalna: ' + minimalna);
console.log('Maksymalna: ' + maksymalna);

var zaokraglenie = Math.round(a);
console.log(zaokraglenie);

var zaokMin = Math.round(Math.min(a,b,c));
console.log(zaokMin);

//abs, round, floor

var x = -56;
var y = -13.1;
var z = 14.9;

document.write('<br>' + Math.abs(x)); //56
document.write('<br>' + Math.abs(y)); //13.1
document.write('<br>' + Math.abs(z)); //14.9

document.write('<br>' + Math.round(x)); //-56
document.write('<br>' + Math.round(y)); //-13
document.write('<br>' + Math.round(z)); //15

document.write('<br>' + Math.floor(x)); //-56
document.write('<br>' + Math.floor(y)); //-14
document.write('<br>' + Math.floor(z) + '<br>'); //14

//potęgowanie

var p = Math.pow(2,10);
console.log(p);

/*var k = prompt('Podaj k');
var l = prompt('Podaj l');
var potegowanie = Math.pow(k,l);
console.log('Potęgowanie: ' + potegowanie);*/

//losowanie

var losuj = Math.random();
console.log(losuj);

//losuj 10 liczb całkowitych z przedziału <0;10> i zapisz je w tablicy


var tablica = [];
for(i = 0; i < 10; i++){
    var x = Math.floor(Math.random() * 11);
    tablica[i] = x;
    document.write('Losowanie od 0 do 10: ' +       x + '<br>');
}
console.log(tablica);



//****************  radio button **************


var elPi = document.getElementById('pi');
var elNic = document.getElementById('nic');
var elPrzycisk = document.getElementById('przycisk');
var elWynik = document.getElementById('wynik');
var pi = Math.PI;

elPrzycisk.onclick = function (){
    if (elNic.checked){
        alert('Wybrałeś radio nic');
    } else if(elPi.checked){
        elWynik.innerHTML = pi;
    }
}










/*zad.dom. Ile razy wypadnie każda cyfra podczas 100 losowań. */

