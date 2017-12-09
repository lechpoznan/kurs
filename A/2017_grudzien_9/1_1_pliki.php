<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery</title>
</head>
<body>
    <?php
        $dir = "./test";
        if(!$fd = @opendir($dir)){
            exit("Nie można otworzyć katalogu $dir");
        }else{
            echo "<ul>";
                while(($plik = readdir($fd)) !== false){
                    if($plik != '.' && $plik != '..')
                        echo "<li>$plik</li>";
                }
            echo "</ul>";
        }
        closedir($fd);
    ?>
</body>
</html>
