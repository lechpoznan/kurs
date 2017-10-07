var boka = document.getElementById('boka');
var bokb = document.getElementById('bokb');
var przycisk = document.getElementById('przycisk');
var wynik = document.getElementById('wynik');

przycisk.onclick = function() {
    var pole;
    var a = Number(boka.value);
    var b = Number(bokb.value);
    pole = a * b;
    wynik.style.color = 'red';
    wynik.textContent = 'Pole prostokąta wynosi: ' + pole;

    //console.log(pole);

}





