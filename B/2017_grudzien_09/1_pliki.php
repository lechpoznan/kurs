<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki</title>
</head>
<body>
    <?php
        $dir = "./test";
        if(!$fd = opendir($dir)){
            closedir($fd);
            exit("Nie można otworzyć katalogu $dir");
        }else{
            echo "<ul>";
                while(($plik = readdir($fd)) !== false){
                    echo "<li>$plik</li>";
                }
            echo "</ul>";
        }
        closedir($fd);
    ?>
</body>
</html>
