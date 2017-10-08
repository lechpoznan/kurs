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

/*elImie.onblur = function(){
    if (elImie.value.length >=2 && elImie.value.length <=20 ){
        elBlok.textContent = '';
    }else{
        elBlok.textContent = 'Błąd';
    }
}*/

function sprawdz(){
    if (this.value.length >=2 && this.value.length <=20 ){
        elBlok.textContent = '';
    }else{
        elBlok.textContent = 'Błąd';
        this.focus(); //nie działa na firefox
    }
}


function mail() {
    if(elMail1.value == elMail2.value && elMail1.value.length>4 && elMail2.value.length>4){
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
    function pass() {
    if(elPass1.value == elPass2.value && elPass1.value.length>4 && elPass2.value.length>4){
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
elPass2.addEventListener('blur',pass);
elImie.addEventListener('blur',sprawdz);
elNazwisko.addEventListener('blur',sprawdz);
elLogin.addEventListener('blur',sprawdz);
elRegulamin.addEventListener('change',regulamin);
elPopraw.addEventListener('click', odblokuj);
elPrzycisk.addEventListener('click',wyslij);

