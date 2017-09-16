var text = "O 20.30 gra Polska";
//var inna = prompt("Podaj imie"); 

console.log(text.length);

var znak = text.charAt(0);
var znakostatni = text.charAt(text.length - 1);
var znak1 = text.charCodeAt(0);
var znak2 = text.charCodeAt(13);
var duzeznaki = text.toUpperCase();
var maleznaki = text.toLowerCase();
//inna = inna.charAt(0).toUpperCase() + 
//    inna.slice(1).toLocaleLowerCase();
var wycinanie = text.substr(8,3);


document.write("Pierwszy znak zmiennej: " + znak);
document.write("<br>Ostatni znak zmiennej: " + znakostatni);
document.write("<br>Kod Ascii pierwszego znaku zmiennej: " + znak1);
document.write("<br>Kod Ascii litery o: " + znak2);
document.write("<br>Duże znaki: " + duzeznaki);
document.write("<br>Małe znaki: " + maleznaki);
//document.write("<br>Inna: " + inna);
document.write("<br>Wycinanie: " + wycinanie);

// Ile pierwszych znaków mam wyświetlić z tego co podałem

/*var podaj = prompt("Podaj wartość");
var ile = prompt("Ile znaków licząc od pierwszego?");
var ciecie = podaj.substr(0,ile);
document.write("<br>Pokazuję " + ile + " znaki: " + ciecie);*/


var podaj = prompt("Podaj wartość");
var ilepoczatek = Number(prompt("Podaj znak początkowy")) - 1;
var x = prompt("Znak końcowy");
ilekoniec = x - ilepoczatek;
var ciecie1 = podaj.substr(ilepoczatek,ilekoniec);
document.write("<br>Pokazuję znaki:"  + ciecie1);

// console.log(podaj.charAt(6));









