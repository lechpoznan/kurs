<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formularz</title>
</head>
<body>
    <form method="get" action="dane.php" >
        <input type="text" name="imie">imię<br>
        <input type="text" name="nazwisko">nazwisko<br>
        <input type="submit">
    </form><br><br>


    <form method="post" action="dane.php" >
        <input type="text" name="login">Login<br>
        <input type="password" name="haslo">Hasło<br>
        <input type="submit">
    </form><br><br>

    <form method="get" action="dane.php">
        <input type="radio" name="radio1" value="pierwsza">pierwsza<br>
        <input type="radio" name="radio1" value="druga">druga<br>
        <input type="radio" name="radio1" value="trzecia">trzecia<br>
        <input type="submit" value="wyślij"><br><br>


        <form method="get" action="dane.php">
            <input type="number" name="x">
            <select name="dzialanie">
                <option value="dodawanie">+</option>
                <option value="odejmowanie">-</option>
            </select>
            <input type="number" name="y">
            <input type="submit" value="=">
        </form>







    </form>
</body>
</html>
