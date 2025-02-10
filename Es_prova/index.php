<?php
    require_once 'Alunno.php';
    $al1 = new Alunno("Yuri", "Viligiardi", 19);
    $al2 = new Alunno("Giacomo", "Petrini", 19);
    $al3 = new Alunno("Tommaso", "Pizzutilo", 18);
    $al4 = new Alunno("Cosimo", "Ballerini", 18);

    $arrayAlunni = [$al1, $al2, $al3, $al4]; 

    echo "<div class='divShowData'>";
        echo "<h1>DATI RACCOLTI</h1>";
        foreach($arrayAlunni as $a){
            echo $a->showData() . "<br>";
        }
    echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>