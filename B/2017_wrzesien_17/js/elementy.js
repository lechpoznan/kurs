//Metoda getElementById()

var elPierwszy = document.getElementById('pierwszy');
elPierwszy.className = 'zielony';


//Metoda getElementsByTagName()

var elNaglowek = document.getElementsByTagName('h1');
if (elNaglowek.length > 0){
    //console.log(elNaglowek.length);
    var elH = elNaglowek[0];
    elH.className = 'czerwony';
}


//Metoda getElementsByClassName

var elCzerwony = document.getElementsByClassName('czerwony');
if (elCzerwony.length > 0){
    //console.log(elCzerwony.length);

    //metoda wolniejsza
    //console.log(elCzerwony);
    //var ostatni = elCzerwony.item(elCzerwony.length - 1);

    //metoda szybsza
    var ostatni = elCzerwony[elCzerwony.length - 1];

    ostatni.className = 'zielony';
}

//Metoda querySelector()
//zwraca pierwsze dopasowanie

var elTv = document.querySelector('li.grey');
//console.log(elTv);
elTv.className = 'czerwony';


//Metoda querySelectorAll()

var elTvAll = document.querySelectorAll('li.grey');
//console.log(elTvAll);
//console.log(elTvAll.length);
elTvAll[2].className = 'zielony';


/*zad.1 Po naziśnięciu przycisku1 zmienią się nagłówki drugiego stopnia. Zostanie im przypisana klasa grey*/


var przycisk1 = document.getElementById('przycisk1');

przycisk1.onclick = function (){
    var naglowek2 = document.getElementsByTagName('h2');
    if (naglowek2.length > 0){
       for(var i = 0; i < naglowek2.length; i++){
           naglowek2[i].className = 'grey';
       }
    }
}









