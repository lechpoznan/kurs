<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Przychodnia</title>
<link rel="stylesheet" href="przychodnia.css">
</head>
<body>

    <?php

        if($polaczenie = mysqli_connect('localhost', 'root', '')){
            echo 'prawidłowe połączenie z serwerem<br>';
        }else{
            echo 'nieprawidłowe połączenie z serwerem<br>';
        }

        if(mysqli_select_db($polaczenie, 'przychodnia')){
            echo 'połączenie prawdłowe z bazą przychodnia<br>';
        }else{
            echo 'Nie nawiązałeś połączenia z bazą przychodnia<br>';
        }

        $zapytanie1 = "SELECT `id`, `imie`, `nazwisko` FROM `pacjenci`";

        if($rezultat1 = mysqli_query($polaczenie, $zapytanie1)){
            echo <<<TABELA
            <table>
            <tr>
            <td>id</td><td>imię</td><td>nazwisko</td>
            </tr>
TABELA;

            while($wiersz = mysqli_fetch_array($rezultat1)){
                echo <<<WIERSZ
                <tr>
                    <td>{$wiersz['id']}</td>
                    <td>{$wiersz['imie']}</td>
                    <td>{$wiersz['nazwisko']}</td>
                </tr>
WIERSZ;
            }
            echo "</table>";




        }else{
            echo 'nieprawidłowe zapytanie';
        }

        echo '<br>';

//********************************************************
//skrypt 2

    echo '<div id="panelLewy">';
        echo <<<FORM
        <form method="POST">
            podaj id:<br>
            <input type="number" name="id">
            <input type="submit" name="przycisk"><br>
        </form>
FORM;

    echo '</div>';

    echo '<div id="panelPrawy">';
        if(isset($_POST['przycisk'])){
            //echo 'nacisnąłeś przycisk';
            $id = $_POST['id'];
            //echo $id;

        $zapytanie2 = "SELECT `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia` FROM `pacjenci` WHERE `id` = '$id'";

        if($rezultat2 = mysqli_query($polaczenie, $zapytanie2)){
            while($wiersz2 = mysqli_fetch_array($rezultat2)){
                echo <<<WIERSZ2
                <p>
                - Imię i nazwisko: {$wiersz2['imie']} {$wiersz2['nazwisko']}<br>
                - Choroby przewlekłe: {$wiersz2['choroby_przewlekle']}<br>
                - Uczulenia: {$wiersz2['uczulenia']}
                </p>
WIERSZ2;
            }
        }else{
            echo "Błąd w zapytaniu";
        }
        }

    echo '</div>';

        mysqli_close($polaczenie);

    ?>

</body>
</html>
