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
        while($wiersz = mysqli_fetch_row($rezultat)){
            echo <<<WIERSZE
            <tr><td>$wiersz[0]</td>
                <td>$wiersz[1]</td>
                <td>$wiersz[2]</td>
            </tr>
WIERSZE;
        }











        }else{
            echo "nieprawidłowe zapytanie";
        }

        mysqli_close($polaczenie);
    ?>
</body>
</html>
