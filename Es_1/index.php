<?php
    require_once 'Veicolo.php';
    require_once 'Automobile.php';

    $am1= new Automobile("porsche", 2023, "GT3 RS");
    $am2= new Automobile("fiat", 1995, "panda");
    $am3= new Automobile("ferrari", 2024, "F80");  
    
    $autodromo = [$am1, $am2, $am3];

    echo "<div class='divShowData'>";
        echo "<h1>AUTO ESPOSTE</h1>";
        foreach($autodromo as $am){
            echo $am->showData() . "<br>";
        }
    echo "</div>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>