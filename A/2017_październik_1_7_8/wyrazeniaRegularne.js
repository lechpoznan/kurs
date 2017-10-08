//var wyrazenie = /[a]/;
//var wyrazenie = /[a-z]/;
//var wyrazenie = /[A-Z]/;
//var wyrazenie = /[A-Z]/i;
//var wyrazenie = /[a-zA-Z]/;
//var wyrazenie = /[a-zA-Z]/;
//var wyrazenie = /[a-ząęćńżźół]/i;
//var wyrazenie = /^[a-ząęćńżźół]{2}$/i;
//var wyrazenie = /^[a-ząęćńżźół]{2,10}$/i;
//var wyrazenie = /^[a-ząęćńżźół\s]{2,}$/i;
//var wyrazenie = /^[a-ząęćńżźół\s]{2,}$/i;
//var wyrazenie = /^mąk[a]?$/i;
//var wyrazenie = /^mąk[a]*$/i;
//var wyrazenie = /./i;
//var wyrazenie = /./i;
//var wyrazenie = /\./i;
//var wyrazenie = /\./i;
//var wyrazenie = /^\.[a-z]{2,3}$/;
//var wyrazenie = /^[\w-]{2,20}$/;  //login
//var wyrazenie = /^[\W]{2,20}$/;
//var wyrazenie = /^\d{2,20}$/;
//var wyrazenie = /^[0-9]{2}-[0-9]{3}$/;
var wyrazenie = /^\d{2}-\d{3}$/;
var imie = /^[a-ząęśżźćńół]{2,16}$/i;
var nazwisko = /^[a-ząęśżźćńół]{2,20}(\-[a-ząęśżźćńół]{2,20})?$/i;
var login = /^[a-z0-9]{1}[\w\.\-]{1,20}[a-z0-9]{1}$/i;
var haslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/i;

var tekst = '.pl';
var sprawdz = wyrazenie.test(tekst);
console.log(sprawdz);








