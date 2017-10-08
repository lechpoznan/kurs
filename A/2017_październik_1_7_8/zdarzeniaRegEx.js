var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elPass1 = document.getElementById('pass1');
var elPass2 = document.getElementById('pass2');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elData = document.getElementById('data');
var elBlok = document.getElementById('blok');
elBlok.style.color = 'red';

var regImie = /^[a-ząęśżźćńół]{2,16}$/i;
var regNazwisko = /^[a-ząęśżźćńół]{2,20}(\-[a-ząęśżźćńół]{2,20})?$/i;
var regLogin = /^[a-z0-9]{1}[\w\.\-]{1,20}[a-z0-9]{1}$/i;
var regMail = /^[a-z]{1}[\w\.\-]{0,30}@(\w{1,20}\.){1,3}[a-z]{1,3}$/i;
var regHaslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/i;


function sprawdzImie(){
    var sprawdz = regImie.test(elImie.value);
    if (sprawdz){
        elBlok.textContent = '';
    }else{
        elBlok.textContent = 'Błędne imie';
        this.focus(); //nie działa na firefox
    }
}

function sprawdzNazwisko(){
    var sprawdz = regNazwisko.test(elNazwisko.value);
    if (sprawdz){
        elBlok.textContent = '';
    }else{
        elBlok.textContent = 'Błędne nazwisko';
        this.focus(); //nie działa na firefox
    }
}

function sprawdzLogin(){
    var sprawdz = regLogin.test(elLogin.value);
    if (sprawdz){
        elBlok.textContent = '';
    }else{
        elBlok.textContent = 'Błędny login';
        this.focus(); //nie działa na firefox
    }
}

function sprawdzMail() {
    var sprawdz = regMail.test(elMail1.value);
    if (!sprawdz) {
        elBlok.textContent = 'Mail nie spełnia wymagań';
        elMail1.focus();
    }else{
        elBlok.textContent = '';
    }
}

function mail() {
    if(elMail1.value == elMail2.value){
        elBlok.textContent = '';
        elMail1.disabled = true;
        elMail2.disabled = true;
    }else{
        elBlok.textContent = 'Mail1 i Mail2 jest różny';
        elMail1.focus();
        elMail1.value = '';
        elMail2.value = '';
    }
}

function sprawdzPass() {
    var sprawdz = regHaslo.test(elPass1.value);
    if (!sprawdz) {
        elBlok.textContent = 'Hasło nie spełnia wymagań';
        elPass1.focus();
    }else{
        elBlok.textContent = '';
    }
}

function pass() {
    if(elPass1.value == elPass2.value){
        elBlok.textContent = '';
        elPass1.disabled = true;
        elPass2.disabled = true;
    }else{
        elBlok.textContent = 'Pass1 i Pass2 jest różne';
        elPass1.focus();
        elPass1.value = '';
        elPass2.value = '';
    }
}

function regulamin() {
    if (elRegulamin.checked){
        elPrzycisk.disabled = false;
    }else{
        elPrzycisk.disabled = true;
    }
}

function odblokuj() {
    var zablokowane = document.getElementsByTagName('input');
    //console.log(zablokowane);
    if (zablokowane.length > 0){
        //console.log(zablokowane.length);
        for (var i=0; i<zablokowane.length; i++){
            if (zablokowane[i].disabled){
                zablokowane[i].disabled = false;
            }
        }
    }
}

function wyslij() {
    var puste = false;
    var pola = document.querySelectorAll('input');
    for (var i=0; i<pola.length;i++){
        if (pola[i].value == ''){
            puste=true;
            break;
        }
    }
        if (puste){
            elBlok.textContent = 'Wypełnij wszystkie pola';
        }else{
            document.write('<div>');
            document.write('Imię: ' + '<span style="color:red">'+elImie.value + '</span>' + '<br>');
            document.write('Nazwisko: ' + '<span style="color:red">'+elNazwisko.value + '</span>' +'<br>');
            document.write('Login: ' + '<span style="color:red">'+elLogin.value + '</span>' +'<br>');
            document.write('Mail: ' + '<span style="color:red">'+elMail1.value + '</span>' +'<br>');
            document.write('Data urodzenia: ' + '<span style="color:red">'+elData.value + '</span>' +'<br>');
            document.write('</div>');
        }
}


elMail2.addEventListener('blur',mail);
elMail1.addEventListener('blur',sprawdzMail);
elPass1.addEventListener('blur',sprawdzPass);
elPass2.addEventListener('blur',pass);
elImie.addEventListener('blur',sprawdzImie);
elNazwisko.addEventListener('blur',sprawdzNazwisko);
elLogin.addEventListener('blur',sprawdzLogin);
elRegulamin.addEventListener('change',regulamin);
elPopraw.addEventListener('click', odblokuj);
elPrzycisk.addEventListener('click',wyslij);

