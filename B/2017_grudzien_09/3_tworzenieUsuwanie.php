<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i katalogi - tworzenie i usuwanie</title>
</head>
<body>
    <form>
        <p>Dodaj folder</p>
        <input type="text" name="folder">
        <input type="submit" name="przycisk" value="Dodaj folder">
    </form>
    <form>
        <p>Dodaj plik</p>
        <input type="text" name="plik"><br>
        <input type="radio" name="rozszerzenie" value=".txt" checked>txt
        <input type="radio" name="rozszerzenie" value=".doc">doc
        <br><input type="submit" name="przyciskP" value="Dodaj plik">
    </form>
    <hr>
    <?php
        $dir = "./test/";
    
    //utworzenie folderu
        if(isset($_GET['przycisk']) && !empty($_GET['folder'])){
            $folder = $_GET['folder'];
            if(!file_exists("$dir$folder")){
                mkdir("$dir$folder");
            }else{
                echo "<h4>Folder o nazwie $folder już istnieje</h4>";
            }
        }
    
    //utworzenie pliku
        if(isset($_GET['przyciskP']) && !empty($_GET['plik'])){
            $dodajPlik = $_GET['plik'];
            $rozszerzenie = $_GET['rozszerzenie'];
            $dodaj = $dodajPlik.$rozszerzenie;
            if(!file_exists("$dir$dodaj")){
                if($fd = fopen("$dir$dodaj", 'w')){
                    echo "<h4>Dodano plik o nazwie $dodaj</h4>";
                }
            }else{
                echo "<h4>Plik o nazwie $dodajPlik już istnieje</h4>";
            }
        }
            
        if(!$folder = opendir($dir)){
            closedir($folder);
            exit("Nie można otworzyć folderu");
        }else{
            $sortuj = 0;
            $plik = array();
            $katalogi = array();
            
            $dane = scandir($dir, $sortuj);
            
            
                foreach ($dane as $wartosc){
                    if($wartosc != "." && $wartosc != ".."){
                       if(is_file($dir."/".$wartosc)){
                           $pliki[] = $wartosc;
                       }else{
                           $katalogi[] = $wartosc;
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
            
            echo "<p>Pliki: <p>";
                echo "<ol>";
                    foreach ($pliki as $wartosc){
                        echo "<li>$wartosc</li>";
                    }
                echo "</ol>";
            
            echo "<p>Katalogi: </p>";
                echo "<ol>";
                    foreach ($katalogi as $wartosc){
                        echo "<li>$wartosc <a href=\"3_tworzenieUsuwanie.php?usunK=$wartosc\">usuń</a></li>";
                    }
                echo "</ol>";
            
        }
    ?>
    <a href="3_tworzenieUsuwanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="3_tworzenieUsuwanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>