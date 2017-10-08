//Tworzenie obiektu za pomocą literału obiektu

var janusz = {
    wzrost: 180,
    waga: 80,
    miejsceUrodzenia: 'Poznań',
    plec: 'm'
}

//console.log(janusz);
//document.write(janusz); //[object Object]
//console.log(janusz.waga);

var auto = {
    marka: 'Porsche',
    model: 'Panamera',
    predkosc: '220',
    wyswietl() {
        //document.write('Marka: ' + auto.marka);
        return 'Marka: ' + this.marka;
    }
}

//document.write(auto.wyswietl());


var ksiazka = {
    tytul: 'Pan Tadeusz',
    rokWydania: 1834,
    gatunek: 'poemat literacki',
        autor: {
            imie:  'Adam',
            nazwisko: 'Mickiewicz',
            wyswietlDane() {
            /*return 'Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;*/
            return 'Tytuł: ' + ksiazka.tytul +'<br>Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;
         }
        }
}

//console.log(ksiazka.autor.imie);
//console.log(ksiazka['autor']['nazwisko']);
//console.log(ksiazka.autor['imie']);
document.write(ksiazka.autor.wyswietlDane());

















