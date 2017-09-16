//pętla for

//1, 2, 3, 4, 5, 6, 7, 8, 9, 10.
for (var x = 1; x <= 10; x++){
    console.log(x);
    if (x == 10){
        document.write(x + ". ");
    }else{
        document.write(x + ", ");
    }
    
}

// liczby 100-50

/*for (var x = 100; x >= 50; x--){
    document.write(x + "<br>");
}*/

/*
var poczatek = Number(prompt("Podaj pierwszą liczbę"));
var koniec = Number(prompt("Podaj drugą liczbę"));

if (poczatek < koniec){
    
    for(x = poczatek; x <= koniec; x++){
       if (x == koniec){
            document.write(x + ".");
       }else{
            document.write(x + ", ");
       }     
    }    
}else{
    alert("Błędne dane!");
}
*/

//liczby parzyste

/*for (var x = 1; x <= 100; x++){
    if(x % 2 == 0){
        document.write(x + "<br>");
    }else{
        
    }
}*/

//liczby nieparzyste

/*for (var x = 1; x <= 100; x++){
    if(x % 2 != 0){
        document.write(x + "<br>");
    }else{
        
    }
}*/

//wypisanie liczb parzystych i nieparzystych

/*for (var x = 1; x <= 100; x++){
    if(x % 2 == 0){
        document.write(x + " - liczba parzysta <br>");
    }else{
        document.write(x + " - liczba nieparzysta <br>");
    }
}*/





//*****************************************

//WHILE

/*var i = 0;
while(i <= 5){
    document.write(i + " ");
    i++;
}
document.write(i);*/

var haslo = "okoń";

var pass = prompt("Podaj hasło");

while(haslo != pass){
    pass = prompt("Podaj hasło");
}

if (haslo == pass){
    document.write("Podałeś poprawne hasło");
}



