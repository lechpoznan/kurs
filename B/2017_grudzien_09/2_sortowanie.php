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
            closedir($fd);
            exit("Nie można otworzyć folderu");
        }else{

            closedir($fd);
        }
    ?>
</body>
</html>
