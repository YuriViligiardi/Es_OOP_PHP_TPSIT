<?php
    require_once'Animale.php';
    require_once'Cane.php';

    $c1 = new Cane("Fuffi", "Abbaglia", "Pitbull");
    $c2 = new Cane("Rufus", "Abbaglia", "Golden Retriever");
    $c3 = new Cane("Michi", "Abbaglia", "Chiwawa");

    $canile = [$c1, $c2, $c3];

    echo "<div class='divShowData'>";
        echo "<h1>CANI AL CANILE</h1>";
        foreach($canile as $c){
            echo $c->showData() . "<br>";
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