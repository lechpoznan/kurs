//Tworzenie obiektu za pomocą literału obiektu

var janusz = {
    wzrost: 180,
    waga: 80,
    miejsceUrodzenia: 'Poznań',
    plec: 'm'
};

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
};

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
};

//console.log(ksiazka.autor.imie);
//console.log(ksiazka['autor']['nazwisko']);
//console.log(ksiazka.autor['imie']);
//document.write(ksiazka.autor.wyswietlDane());

var klucz = 'nazwisko';
//console.log(ksiazka.autor[klucz]);

//******************************************************

//Tworzenie pustego obiektu

var produkt = {};

//console.log(produkt);
//console.log(typeof(produkt.nazwa));

produkt.nazwa = 'pralka';
produkt.firma = 'Bosch';
produkt.cena = 1500;
produkt.wyswietl = function() {
    return 'Nazwa: ' + this.nazwa + '<br>Firma: ' + this.firma + '<br>Cena: ' + this.cena;
}

/*console.log(typeof(produkt.nazwa));
console.log(typeof(produkt.cena));
console.log(typeof(produkt.wyswietl));*/

//*************************************************
//*************************************************

//konstruktor Object()

//var tablica = new Array();

var hotel = new Object();

hotel.nazwa = 'Hotel Poznań';
hotel.pokoje = 100;
hotel.zarezerwowanePokoje = 39;
hotel.silownia = true;
hotel.basen = false;
hotel.rodzajePokoju = ['pojedyncze', 'podwójne', 'apartament'];
hotel.wolnePokoje = function() {
    return hotel.pokoje - hotel.zarezerwowanePokoje;
}

//console.log(typeof(hotel.silownia));

//***********************************

function Hotel(nazwa, pokoje, zarezerwowanePokoje, silownia, basen, rodzajPokoju){
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.zarezerwowanePokoje = zarezerwowanePokoje;
    this.silownia = silownia;
    this.basen = basen;
    this.rodzajPokoju = rodzajPokoju;
    this.wolnePokoje = function() {
        return this.pokoje - this.zarezerwowanePokoje;
    }
}

var HotelLech = new Hotel('Lech',100, 49, true, false, ['małżeński', 'Apartament']);
var HotelMercury = new Hotel('Mercury',150, 49, true, false, ['jednoosobowe', 'Apartament']);

document.write('W hotelu Lech jest wolnych pokoi: ' + HotelLech.wolnePokoje() + '<br>');
document.write('W hotelu Mercury jest wolnych pokoi: ' + HotelMercury.wolnePokoje());

//kontynuacja od 122 linii
