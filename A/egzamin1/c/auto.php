<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Komis Samochodowy</title>
<link rel="stylesheet" href="auto.css">
</head>
<body>
    <div id="baner">
        <h1>SAMOCHODY</h1>
    </div>

    <div id="panelLewy">
        <h2>Wykaz samochodów</h2>

        <?php

            $polaczenie = @new mysqli('localhost', 'root', '', 'komis');

            if($polaczenie->connect_error){
                //echo "Błąd połączenia: $polaczenie->connect_error";
                echo "Błąd połączenia: $polaczenie->connect_errno";

                //serwer 2002
                //użytkownik 1044
                //hasło 1045
                //baza 1049

            }else{

//zapytanie 1

                $zapytanie = "SELECT `id`,`marka`,`model` FROM `samochody`";

                if($rezultat1 = $polaczenie->query($zapytanie)){
                    echo "<ul>";
                    while($wiersz = $rezultat1->fetch_assoc()){

            /*echo "<li>
                {$wiersz['id']}
                {$wiersz['marka']}
                {$wiersz['model']}
                </li>";*/

                echo <<<WIERSZ
                <li>
                {$wiersz['id']}
                {$wiersz['marka']}
                {$wiersz['model']}
                </li>
WIERSZ;

                    }
                    echo "</ul>";

                }else{
                    echo "Błędne zapytanie";

                }



        echo "<h2>Zamówienia</h2>";

        //zapytanie 2

        $zapytanie = "SELECT `Samochody_id`, `Klient` FROM `zamowienia`";

        if($rezultat = $polaczenie->query($zapytanie)){

            echo "<ul>";

            while($wiersz = $rezultat->fetch_assoc()){

                echo <<<WIERSZ
                <li>
                    {$wiersz['Samochody_id']}
                    {$wiersz['Klient']}
                </li>
WIERSZ;

            }

            echo "</ul>";

        }else{
            echo "Błędne zapytanie";
        }



        }
        ?>
    </div>

    <div id="banerPrawy">
        <h2>Pełne dane: Fiat</h2>
        <?php

        $zapytanie3 = "SELECT * FROM `samochody` WHERE `marka` = 'Fiat'";

        if($rezultat = $polaczenie->query($zapytanie3)){

            while($wiersz = $rezultat->fetch_assoc()){

            echo <<<WIERSZ
            {$wiersz['id']} /
            {$wiersz['marka']} /
            {$wiersz['model']}
            {$wiersz['rocznik']} /
            {$wiersz['kolor']} /
            {$wiersz['stan']} <br>
WIERSZ;

            }

        }else{
            echo "Błędne zapytanie";
        }

        mysqli_close($polaczenie);

        ?>
    </div>

    <div id="stopka">

    </div>
</body>
</html>
