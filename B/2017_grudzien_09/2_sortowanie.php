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
            $sortuj = 1;
            $dane = scandir($dir, $sortuj);
            echo "<ul>";
                foreach ($dane as $wartosc){
                    if($wartosc != "." && $wartosc != "..")
                        echo "<li>$wartosc</li>";
                }
            echo "</ul>";
            closedir($folder);
        }
    ?>
    <a href="2_sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="2_sortowanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
