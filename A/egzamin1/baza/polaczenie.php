<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'komis';

    $polaczenie = @new mysqli($host, $user, $pass, $database);

    if($polaczenie->connect_error){
        exit("Błędne połączenie: ".$polaczenie->connect_errno);
    }else{
        echo "Poprawne połączenie<br>";
    }


?>
