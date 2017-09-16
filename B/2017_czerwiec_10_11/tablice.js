var szkola = ['Anna', 'Andrzej','Jarek'];
//document.write(szkola[0]);

var tablica = new Array('Anna', 'Andrzej', 'Jarek');
tablica[3] = 'Robert';
//document.write(tablica[4]);

var nazwisko = new Array();
nazwisko[0] = 'Nowak';
nazwisko[1] = 'Kowal';
nazwisko[2] = 'Lewandowski';
//document.write(nazwisko[nazwisko.length - 1]);
//document.write(nazwisko[2]);


//***************************************************

/*var kolor1 = prompt("Podaj pierwszy kolor");
var kolor2 = prompt("Podaj drugi kolor");
var kolor3 = prompt("Podaj trzeci kolor");

var kolory = new Array(kolor1, kolor2, kolor3);

document.write("Pierwszy kolor: " + kolor1 + "<br>");
document.write("Drugi kolor: " + kolor2 + "<br>");
document.write("Trzeci kolor: " + kolor3 + "<br>");

document.write("Tablica o nazwie kolory ma " + kolory.length + " elementy");*/

//***************************************************

//tablice wielowymiarowe

/*var dane = new Array();
dane[0] = ['Jan', 'Kowal', 'Poznań'];
dane[1] = ['Anna', 'Nowak', 'Poznań'];
dane[2] = ['Paweł', 'Kowalski', 'Gniezno'];

//document.write(dane.length);
//document.write(dane[0]); //Jan,Kowal,Poznań
//document.write(dane[0][0]); //Jan

var dane1 = new Array(
new Array('Jan', 'Kowal', 'Poznań'),
new Array('Anna', 'Nowak', 'Poznań'),
new Array('Paweł', 'Kowalski', 'Gniezno')
);*/

/*document.write(dane1[2][2]);
document.write(dane1.length);*/

//*************************************************
/*
var cyfry = new Array(1, 2, 20, 190, -1);

for (var x = 0; x <= cyfry.length -1; x++){
    document.write(cyfry[x] + ", ");
}

document.write("<br>");

cyfry.sort(function (a,b){
    return(a-b);
}
);

for (var x = 0; x <= cyfry.length -1; x++){
    document.write(cyfry[x] + ", ");
}*/

//*************************************************

var zwierze1 = prompt("Podaj pierwszego zwierzaka");
zwierze1 = zwierze1.toLowerCase();
var zwierze2 = prompt("Podaj drugie zwierzaka");
zwierze2 = zwierze2.toLowerCase();
var zwierze3 = prompt("Podaj trzecie zwierzaka");
zwierze3 = zwierze3.toLowerCase();

var zwierzaki = new Array(zwierze1, zwierze2, zwierze3);

zwierzaki.push("zebra", "krowa");
zwierzaki.pop();

zwierzaki.sort();
zwierzaki.reverse();

for (var x = 0; x <= zwierzaki.length -1; x++){
    document.write(zwierzaki[x] + "<br>");
}

//*************************************************

//tablice asocjacyjne

var angielski = new Array();
angielski['pies'] = "dog";
angielski['kot'] = "cat";

document.write(angielski['pies']);


var tablica = { "Ala" : "kot", "Pi" : 3.1415 };
for (var klucz in tablica)
    document.write(klucz + ": " + tablica[klucz] + "<br>");









