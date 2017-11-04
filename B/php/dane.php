<?php
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    if (empty($_GET['imie']) || empty($_GET['nazwisko'])){
        echo "Nie wprowadziłeś danych!";
    }else{
        echo 'Twoje imię: <span style="color:red">', $imie, '</span><br>';
        echo 'Twoje imię: ', $imie, '<br>';
        echo 'Twoje nazwisko: ', $nazwisko;
    }

//****************************************

   /* $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if (!empty($_POST['login']) && !empty($_POST['haslo'])){
        echo 'Login: ', $login, '<br>';
        echo 'hasło: ', $haslo, '<br>';
    }else{
        echo 'Nie wprowadziłeś wszystkich danych';
    }*/


//************************************


if (isset($_GET['radio1'])){
    echo 'Zaznaczona opcja: ', $_GET['radio1'];
}else{
    //echo 'Proszę zaznaczyć jedną z opcji';
    header('Location: formularz.php');
}


//*************************************


$dzialanie = $_GET['dzialanie'];
$x = $_GET['x'];
$y = $_GET['y'];
echo $dzialanie;












?>
