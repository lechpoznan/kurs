<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i katalogi - sortowanie</title>
</head>
<body>
    <?php
        $dir = "./test";
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
                        echo "<li>$wartosc</li>";
                    }
                echo "</ol>";
            
        }
    ?>
    <a href="2_1_sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="2_1_sortowanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
