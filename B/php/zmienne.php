<?php
    //var zmienna = 5;  //js

    $liczba=5;
    $_liczba=12;
    $liczba2=1;
    $imie="Julia";
    $Imie="Anna";
    $Imię="Anna";
    $wartość=1;

    //echo $liczba; //5
    //echo "$liczba";   //5
    //echo '$liczba'; //$liczba

//typy zmiennych

//typ skalarny (prosty)

//typ boolean
    $prawda = true;
    $falsz = false;

//typ integer
    $calkowita = 200;
    $szesnastkowa = 0xA734B2;
    $osemkowa = 021;
    $binarna = 0b1010;

    //echo $binarna;

//typ float
    $zmienna = 5.25;
    echo $zmienna;


//typ string

echo "tekst<br>";
echo 'tekst<br>';

//składnia heredoc

    $imie = 'Tomek';
    $tekst = <<<ETYKIETA
    <table border="1"><tr><td>Moje imię: $imie</td></tr>
    <tr><td>Moje imię: $imie</td></tr>
    <tr><td>Mama 20 latMieszkam w Poznaniu</td></tr>

    </table>
ETYKIETA;

echo $tekst;

//nowdoc

$nazwisko = "Nowak";
$dane = <<<'NAZWISKO'
Moje nazwisko: $nazwisko<br>
NAZWISKO;

echo $dane;

//typy złożone
//typ array (tablicowy)
//typ object (obiektowy)

//typy specjalne
//typ null

$nic = null;


//operatory arytmetyczne

//**, *, /, +, -, %

$potegowanie = 2**4;    //16
$resztaZdzielenia = 10%4;   //2
echo $potegowanie,"<br>",$resztaZdzielenia,"<br>";


//operatory logiczne

//and, or, xor, !, &&, ||

$x=1;
$y=1;

if(($x==1 && $y==2) and $x==3){
    echo "true<br>";
}else{
    echo "false<br>";
}

/*Adam idzie do sklepu, będzie mógł kupić masło jeśli:
1)otwart sklep
2)ma pieniądze
3)jest masło*/

$sklep = true;
$pieniadze = true;
$maslo = true;

if ($sklep == true && $pieniadze == true && $maslo == true){
    echo "Kupiłeś masło<br>";
}else{
    echo "Brak masła<br>";
}

//****************************************

/*Adam idzie do sklepu, chce kupić batona lub lizaka:
1)otwart sklep
2)ma pieniądze
3)jest baton lub lizak*/

$sklep = true;
$pieniadze = true;
$baton = true;
$lizak = true;

if ($sklep == true && $pieniadze == true && ($baton == true || $lizak == true)){
    echo "Kupiłeś słodycze<br>";
}else{
    echo "Brak słodyczy<br>";
}








?>
