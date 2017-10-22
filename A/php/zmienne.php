<?php
    /*echo "test<br>";
    echo 'test<br>';
    echo "tekst ",8," tekst1<br>";*/

    #komentarz w jednej linii

    //var zmienna = 5; //js

    //zmienne php

    $zmienna = 5;
    $_x = 1;
    $xy1 = 1;
    //$1x = 3;  // błąd
    $wartość = 'test';






    /*echo $zmienna;
    echo "Zmienna wynosi: $zmienna";
    echo '$zmienna';
    print "test";*/

//*****************************************
//typy danych

//typy skalarne
//typ boolean

$prawda = true;
$falsz = false;

//typ integer
$calkowita = 3;
$osemkowa = 021;    //1*1+2*8=17
$szesnastkowa = 0xA;
$binarna = 0b1010;

//echo $binarna;


//typ float
$zmiennoprzecinkowa = 3.5;

//typ string

$tekst1 = "text";
$tekst2 = 'text';

//składnia heredoc
    $name = 'Janusz';
    $imie = <<<ETYKIETA
    Mam na imię: $name<br>
    Mam 20 lat<br>
    Mieszkam w Poznaniu<br>ETYKIETA
ETYKIETA;

    echo $imie;

//składania nowdoc


    $n = 'Nowak';
    $nazwisko = <<<'TEKST'
    <br>Mam na nazwisko: $n<br>
    Mam 20 lat<br>
    Mieszkam w Poznaniu<br>ETYKIETA<br><br>
TEKST;

    echo $imie;
    echo $nazwisko;

//typy złożone
//typ array (tablicowy)
//typ object (obiektowy)

//typy specjalne
//typ null

$nic = null;
$nic1 = NULL;


//*****************************************
//operatory

//**, *, +, -, /, %

$potega = 2**3; //8
echo $potega,"<br>";

$resztaZdzielenia = 8%3;
echo $resztaZdzielenia,"<br>";

//*****************************************
//operatory logiczne

//and, or, xor, !, &&, ||
//and i
//or lub
//xor alternatywa

//sprawdz czy kupisz sok w sklepie, który kosztuje 5zł

$sklep = 'otwarty';
$pieniadze = 100;
$sok = false;


if ($sklep == 'otwarty' && $pieniadze >= 5 && $sok){
    echo "Kupiłeś sok<br>";
}else{
    echo "Nie kupiłeś soku<br>";
}

//Chcesz kupić w sklepie sok lub banany

$sklep = 'otwarty';
$pieniadze = 100;
$sok = false;
$banany = true;


if ($sklep == 'otwarty' && $pieniadze >= 5 && ($sok || $banany)){
    if ($sok && $banany){
        echo "Kupiłeś sok i banany<br>";
    }else{
        if ($sok){
            echo "Kupiłeś sok<br>";
        }else{
            echo "Kupiłeś banany<br>";
        }
    }

}else{
    echo "Nic nie kupiłeś<br>";
}


//********************************************

$a = 1;
$b = '1';

if ($a === $b){
    echo "a i b jest równe<br>";
    $suma = $a + $b;
    echo "suma a i b wynosi: $suma<br>";
}else{
    echo "a i b jest różne<br>";
}









?>
