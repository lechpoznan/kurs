<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Komis Samochodowy</title>
<link rel="stylesheet" href="auto.css">
</head>
<body>
    <?php
        $polaczenie = @new mysqli('localhost','root','','komis');

        if($polaczenie->connect_error){
            //exit("Błąd połączenia: ".$polaczenie->connect_error);
            exit("Błąd połączenia: ".$polaczenie->connect_errno);

            //serwer 2002
            //użytkownik 1044
            //hasło 1045
            //baza 1049

        }else{
            //echo "Poprawne połączenie<br>";

            echo "<h2>Wykaz samochodów</h2>";

            $zapytanie = "SELECT `id`,`marka`,`model` FROM `samochody`";


          if ($rezultat = $polaczenie->query($zapytanie)){
        echo "<ul>";


        while($wiersz = $rezultat->fetch_assoc()){
            //echo 'test';
        echo <<<WIERSZ

            <li>{$wiersz["id"]} {$wiersz["marka"]} {$wiersz["model"]}</li>

WIERSZ;

        }

              echo "</ul>";

          }else{
              echo "Niepoprawne zapytanie";
          }

        $zapytanie2 = "SELECT `Samochody_id`, `Klient` FROM `zamowienia`";

        echo "<h2>Zamówienia</h2>";

        if($rezultat2 = $polaczenie->query($zapytanie2)){

            echo "<ul>";

            while($wiersz2 = $rezultat2->fetch_assoc()){
                echo "<li>
                {$wiersz2['Samochody_id']}
                {$wiersz2['Klient']}
                </li>";
            }

            echo "</ul>";
        }else{
            echo 'Niepoprawne zapytanie';
        }


        $zapytanie3 = "SELECT * FROM `samochody` WHERE `marka` = 'Fiat'";

        if($rezultat3 = $polaczenie->query($zapytanie3)){

        echo "<h2>Pełne dane: Fiat</h2>";

        while($wiersz3 = $rezultat3->fetch_assoc()){
            echo "{$wiersz3['id']}
             / {$wiersz3['marka']}
             / {$wiersz3['model']}
             / {$wiersz3['rocznik']}
             / {$wiersz3['kolor']}
             / {$wiersz3['stan']}
            <br>";
        }

        }else{
            echo "Niepoprawne zapytanie";
        }


        mysqli_close($polaczenie);
        }


    ?>


</body>
</html>
