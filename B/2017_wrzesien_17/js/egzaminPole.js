var elWynik = document.getElementById('wynik');
var elDlugosc = document.getElementById('dlugosc');
var elPrzPole = document.getElementById('pole');
var elPrzObwod = document.getElementById('obwod');

elPrzPole.onclick = function (){
    if (elDlugosc.value == '' || isNaN(elDlugosc.value)){
        elWynik.innerHTML = 'Należy wpisać wartość liczbową';
    }
}













