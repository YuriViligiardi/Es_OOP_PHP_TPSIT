<?php
    class Automobile extends Veicolo {
        //attributes
        public $modello;

        //methods and constructors
        public function __construct($marca, $anno, $modello){
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        public function getModello() {
        return $this->modello;
        }
        public function setModello($value) {
        $this->modello = $value;
        }

        public function showData(){
            echo "<p><b>Modello: </b>" . parent::getMarca() . "</p>";
            echo "<p><b>Anno: </b>" . parent::getAnno() . "</p>";
            echo "<p><b>Modello: </b>$this->modello</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>