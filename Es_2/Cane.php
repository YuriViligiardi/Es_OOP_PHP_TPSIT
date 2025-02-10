<?php
    class Cane extends Animale{
        //attributes
        public $razza; 

        //methods and constructors
        public function __construct($nome, $verso, $razza){
            parent::__construct($nome, $verso);
            $this->razza = $razza;
        }

        public function getRazza() {
            return $this->razza;
        }
        public function setRazza($value) {
            $this->razza = $value;
        }

        public function showData(){
            echo "<p><b>Il cane: </b>" . parent::getNome() . "</p>";
            echo "<p><b>Verso: </b>" . parent::getVerso() . "</p>";
            echo "<p><b>Razza: </b>$this->razza</p>";
        }

    }

?>


