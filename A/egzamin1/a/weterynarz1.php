<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <?php

    //połączenie z serwerem
        if($polaczenie = mysqli_connect('localhost','root','')){
            echo 'Połączyłeś się z serwerem MySQL<br>';
        }else{
            exit("Błąd płączenia<br>");
        }

    //połączenie z bazą danych
        if(mysqli_select_db($polaczenie, 'weterynarz')){
            echo "Połączyłeś się z bazą: weterynarz<br>";
        }else{
            echo "brak połączenia z bazą: weterynarz<br>";
        }

        $zapytanie = "SELECT `zwierzeta`.`id`, `zwierzeta`.`imie`, zwierzeta.wlasciciel FROM `zwierzeta` WHERE (`zwierzeta`.`rodzaj` =1)";



        if($rezultat = mysqli_query($polaczenie, $zapytanie)){

//wyświetlenie tabeli z danych z bazy

        echo <<<TABELA
        <table border=1>
        <tr><td>id</td><td>imię</td><td>właściciel</td></tr>
TABELA;
        while($wiersz = mysqli_fetch_array($rezultat)){
            echo <<<WIERSZE
            <tr><td>{$wiersz['id']}</td>
                <td>{$wiersz['imie']}</td>
                <td>{$wiersz['wlasciciel']}</td>
            </tr>
WIERSZE;
        }

        }else{
            echo "nieprawidłowe zapytanie";
        }
        echo "</table>";

    $zapytanieKot = "SELECT `zwierzeta`.`id`, `zwierzeta`.`imie`, zwierzeta.wlasciciel FROM `zwierzeta` WHERE (`zwierzeta`.`rodzaj` =2)";

        if($rezultatKot = mysqli_query($polaczenie, $zapytanieKot)){

//wyświetlenie tabeli z danych z bazy

        echo <<<TABELA
        <table border=1>
        <tr><td>id</td><td>imię</td><td>właściciel</td></tr>
TABELA;

        echo "<br><br>";

        while($wierszKot = mysqli_fetch_array($rezultatKot)){
            echo <<<WIERSZE
            <tr><td>{$wierszKot['id']}</td>
                <td>{$wierszKot['imie']}</td>
                <td>{$wierszKot['wlasciciel']}</td>
            </tr>
WIERSZE;

        }

        }else{
            echo "nieprawidłowe zapytanie";
        }
        echo "</table>";

//************************************************
//skrypt 3


     $zapytanieWszystko = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`telefon`, `zwierzeta`.`szczepienie`,zwierzeta.opis FROM `zwierzeta`";

        if($rezultatWszystko = mysqli_query($polaczenie, $zapytanieWszystko)){

//wyświetlenie tabeli z danych z bazy

        echo "<br><br>";

        while($wierszWszystko = mysqli_fetch_array($rezultatWszystko)){
            echo <<<WIERSZE
            <tr><td>Pacjent:{$wierszWszystko['imie']}<br></td>
                <td>Telefon właściciela: {$wierszWszystko['telefon']}, </td>
                <td>ostatnie szczepienie: {$wierszWszystko['szczepienie']}, </td>
                <td>informacje: {$wierszWszystko['opis']}<hr></td>
            </tr>
WIERSZE;

        }

        }else{
            echo "nieprawidłowe zapytanie";
        }
        echo "</table>";


    mysqli_close($polaczenie);
    ?>
</body>
</html>
