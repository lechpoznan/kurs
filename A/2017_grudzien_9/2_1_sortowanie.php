<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php
       $dir = "./test";
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
                echo "<li>$x</li>";
        echo "</ol>";

        echo "<p>Katalogi:</p>";
            echo "<ol>";
            foreach($katalogi as $x)
                echo "<li>$x</li>";
        echo "</ol>";
    ?>
    <a href="2_1_sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="2_1_sortowanie.php?sortuj=1">Sortuj malejąco</a>
</body>
</html>
