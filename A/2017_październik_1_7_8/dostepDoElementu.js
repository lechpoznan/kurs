//Metoda getElementById()

var elPierwszy = document.getElementById('pierwszy');
elPierwszy.className = 'zielony';

//Metoda getElementsByTagName()

var elNaglowek = document.getElementsByTagName('h1');
if (elNaglowek.length > 0){
    //console.log(elNaglowek.length);
    elNaglowek[0].className = 'czerwony';
}

//Metoda getElementsByClassName()

var elCzerwone = document.getElementsByClassName('czerwony');
if (elCzerwone.length > 0){
    //console.log(elCzerwone);

    //metoda wolniejsza
    //var ostatni = elCzerwone.item(3);
    var ostatni = elCzerwone.item(elCzerwone.length - 1);
    ostatni.className = 'zielony';

    //metoda szybsza
    var poczatek = elCzerwone[0];
    poczatek.className = 'zielony';

}


//Metoda querySelector()

//zwraca pierwsze dopasowanie

//var elFirst = document.querySelector('li');
var elFirst = document.querySelector('li.czerwony');
console.log(elFirst);
elFirst.className = 'grey';

//Metoda querySelectorAll

var elAllZiel = document.querySelectorAll('li.zielony');
console.log(elAllZiel);
//elAllZiel[1].className = 'grey';
for (var i=0; i<elAllZiel.length; i++){
    elAllZiel[i].className = 'grey';
}

//Metoda getElementsByName

var lista = document.getElementsByName('sport');
var radioGrey = document.getElementById('radio');

console.log(lista);

function zmien(){
    if (radioGrey.checked){
    //alert('Zaznaczone pole');
        for(var i=0; i<lista.length; i++){
            lista[i].className = 'grey';
        }
} else {
    //alert('Niezaznaczone pole');
     for(var i=0; i<lista.length; i++){
            lista[i].className = 'czerwony';
        }
}
}

radioGrey.addEventListener('change',zmien);

//previousElementSibling   nextElementSibling

var poczatekElem = document.getElementById('s2');
var poprzedniElem = poczatekElem.previousElementSibling;
var nastepnyElem = poczatekElem.nextElementSibling;
//var poprzedniElem = poczatekElem.previousSibling;

poprzedniElem.className = 'zielony';
nastepnyElem.className = 'zielony';
//console.log(poczatekElem);
console.log(poprzedniElem);


//firstChild, lastChild

//var ks = document.getElementsByTagName('ul');
var ks = document.getElementsByTagName('ul')[1];
//console.log(ks);

var ksFirst = ks.firstElementChild;
var ksLast = ks.lastElementChild;
ksFirst.className = 'czerwony';
ksLast.className = 'czerwony';

//**********************************************

/*zad.1
Zmień pierwsze pole tekstowe na button i przypisz wartość 'Wyślij' dla przycisku*/

var text = document.getElementsByTagName('input')[1];
console.log(text);
text.setAttribute('type', 'button');
text.setAttribute('value', 'Wyślij');

/*Przekieruj na stronę wp.pl po naciśnięciu na tekst www*/

var link = document.getElementById('link');
link.setAttribute('href', 'http:\\wp.pl');






