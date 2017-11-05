<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wstawianie do bazy danych komis</title>
<link rel="stylesheet" href="insert.css">
</head>
<body>
    <h2>Komis - dodanie samochodu</h2>

    <form>
        <input type="text" name="marka">marka<br>
        <input type="text" name="model">model<br>
        <input type="number" name="rocznik">rocznik<br>
        <input type="text" name="kolor">kolor<br>
        <input type="text" name="stan">stan<br>
        <input type="submit" name="przycisk"><br><br>
    </form>

    <?php

        $polaczenie = new mysqli('localhost', 'root', '', 'komis');

        if($polaczenie->connect_errno){
            echo "Błąd połączenia";
        }else{

        if(isset($_GET['przycisk'])){

            if(!empty($_GET['marka']) && !empty($_GET['model']) && !empty($_GET['rocznik']) && !empty($_GET['kolor']) && !empty($_GET['stan'])){

            $marka = $_GET['marka'];
            $model = $_GET['model'];
            $rocznik = $_GET['rocznik'];
            $kolor = $_GET['kolor'];
            $stan = $_GET['stan'];

            $zapytanie = "INSERT INTO `samochody` (`id`, `marka`, `model`, `rocznik`, `kolor`, `stan`) VALUES (NULL, '$marka', '$model', '$rocznik', '$kolor', '$stan')";

            $zapytanieAll = "SELECT * FROM samochody";

            if($rezultat = $polaczenie->query($zapytanie)){
                //echo "Dodałeś nowy wiersz";

                echo <<<TABELA
                <table>
                <tr>
                <th>id</th>
                <th>marka</th>
                <th>model</th>
                <th>rocznik</th>
                <th>kolor</th>
                <th>stan</th>
                </tr>
TABELA;


                if($rezultatAll = $polaczenie->query($zapytanieAll)){

                    while($wiersz = $rezultatAll->fetch_assoc()){
                echo <<<WIERSZ
                    <tr>
                        <td>{$wiersz['id']}</td>
                        <td>{$wiersz['marka']}</td>
                        <td>{$wiersz['model']}</td>
                        <td>{$wiersz['rocznik']}</td>
                        <td>{$wiersz['kolor']}</td>
                        <td>{$wiersz['stan']}</td>
                    </tr>
WIERSZ;

                }


                }

                echo "</table>";

            }else{
                echo "Błędne zapytanie";
            }
}else{
           echo "<span>Wprowadź wszystkie dane<br></span>";
            }
        }

        mysqli_close($polaczenie);

        }

    ?>


</body>
</html>
