<?php
    require_once'Persona.php';
    require_once'Studente.php';

    $s1 = new Studente("Yuri", "Viligiardi", 1);
    $s2 = new Studente("Giacomo", "Petrini", 2);
    $s3 = new Studente("Tommaso", "Pizzutilo", 3);
    $s4 = new Studente("Cosimo", "Ballerini", 4);

    $scuola = [$s1, $s2, $s3, $s4];

    echo "<div class='divShowData'>";
        echo "<h1>STUDENTI NELLA SCUOLA</h1>";
        foreach($scuola as $s){
            echo $s->showData() . "<br>";
        }
    echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>