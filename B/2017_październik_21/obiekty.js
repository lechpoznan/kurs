//tworzenie obiektu za pomocą literału
var janusz = {
    wzrost: 180,    //właściwość
    waga: 80,   //właściwość
    miejsceUrodzenia: 'Poznań', //właściwość
    plec: 'm',   //właściwość
    wyswietl(){     //metoda
    /*document.write(janusz.wzrost);
    document.write(janusz.waga);*/

    //return "Wzrost: " + janusz.wzrost;
    return "Wzrost: " + this.wzrost + "<br>Waga: " + this.waga + "<br>Miejsce urodzenia: " + this.miejsceUrodzenia + "<br>Płeć: " + this.plec ;
}
};

//document.write(janusz.wzrost);
//document.write(janusz.wyswietl());

//****************************************

//konstruktor

function Hotel(nazwa, pokoje, pokojeZarezerwowane){
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.pokojeZarezerwowane = pokojeZarezerwowane;
    this.wolnePokoje = function(){
        return this.pokoje - this.pokojeZarezerwowane;
    }
    this.wyswietl = function(){
     return   "Nazwa hotelu: " + this.nazwa + "<br>Wolne pokoje: " + this.wolnePokoje();
    }
}

var polonez = new Hotel('Polonez', 150, 50);


document.write(polonez.wyswietl());









