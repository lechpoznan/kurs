<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - dodawanie, usuwanie</title>
</head>
<body>
    <form>
        <input type="text" name="katalog">
        <input type="submit" name="przycisk" value="Utwórz katalog">
    </form><br>
    <form>
        <input type="text" name="plik">
        <input type="submit" name="przyciskP" value="Utwórz plik"><br>
        <input type="radio" name="typ" value=".txt" checked>txt
        <input type="radio" name="typ" value=".docx">docx
        <input type="radio" name="typ" value=".doc">doc<br>

    </form>
    <hr>
    <?php
       $dir = "./test";

//usuwanie folderu

        if(isset($_GET['usunK'])){
            $usunK = $_GET['usunK'];
            if(file_exists($dir."/".$usunK))
                rmdir($dir."/".$usunK);
        }

//usuwanie pliku

        if(isset($_GET['usunP'])){
            $usunP = $_GET['usunP'];
            if(file_exists($dir."/".$usunP))
                unlink($dir."/".$usunP);
        }

//dodanie katalogu

        if(isset($_GET['przycisk']) && !empty($_GET['katalog'])){
            $kat = $_GET['katalog'];
            if(!file_exists($dir."/".$kat)){
                mkdir($dir."/".$kat);
            }else{
                echo "<h4>Katalog o nazwie $kat istnieje</h4>";
            }
        }

//dodanie pliku

        if(isset($_GET['przyciskP']) && !empty($_GET['plik'])){
            $plik = $_GET['plik'];
            $typ = $_GET['typ'];
            if(!file_exists($dir."/".$plik.$typ)){
                if($nowyPlik = fopen($dir."/".$plik.$typ, 'w')){
                    echo "<h4>Dodano plik o nazwie $plik$typ</h4>";
                }
            }else{
                echo "<h4>Plik o nazwie $plik$typ już istnieje</h4>";
            }
        }

        if(!$folder = opendir($dir))
        {
            exit("Nie można otworzyć folderu $dir");
        }else{
            $sortuj = 0;
            $pliki = array();
            $katalogi = array();

            $dane = scandir($dir, $sortuj);

            foreach ($dane as $x){
                if($x != '.' && $x != '..'){
                    if(is_file($dir."/".$x))
                        $pliki[] = $x;
                    else{
                        $katalogi[] = $x;
                }
                }
            }
        }
        closedir($folder);

        if(isset($_GET['sortuj'])){
            $sortuj = $_GET['sortuj'];
            if($sortuj == 0){
                sort($pliki);
                sort($katalogi);
            }else{
                rsort($pliki);
                rsort($katalogi);
            }
        }

        /*print_r($pliki);
        echo "<br>";
        print_r($katalogi);
        echo "<br>";*/

        echo "<p>Pliki:</p>";
        echo "<ol>";
            foreach($pliki as $x)
                echo "<li>$x <a href=\"4_usuwanie.php?usunP=$x\">Usuń</a></li>";
        echo "</ol>";

        echo "<p>Katalogi:</p>";
            echo "<ol>";
            foreach($katalogi as $x)
                echo "<li>$x <a href=\"4_usuwanie.php?usunK=$x\">Usuń</a></li>";
        echo "</ol>";
    ?>
    <a href="4_usuwanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="4_usuwanie.php?sortuj=1">Sortuj malejąco</a>

</body>
</html>
