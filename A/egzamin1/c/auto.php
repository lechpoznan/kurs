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

          //if ($rezultat = mysqli_query($polaczenie, $zapytanie)){
          if ($rezultat = $polaczenie->query($zapytanie)){
            echo <<<TABELA
            <table>
            <tr>
            <th>id</th><th>marka</th><th>model</th>
            </tr>
TABELA;

        //while($wiersz = $rezultat->fetch_array(MYSQLI_ASSOC)){
        while($wiersz = $rezultat->fetch_assoc()){
            //echo 'test';
        echo <<<WIERSZ
            <tr>
            <td>{$wiersz["id"]}</td>
            </tr>
WIERSZ;

        }



          }else{
              echo "Niepoprawne zapytanie";
          }












        }


    ?>


</body>
</html>
