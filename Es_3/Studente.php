<?php
    class Studente extends Persona{
        //attributes 
        public $matricola;
        //methods anc constructors

        public function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        public function getMatricola() {
            return $this->matricola;
        }

        public function setMatricola($value) {
            $this->matricola = $value;
        }

        public function showData(){
            echo "<p><b>Lo studente con matricola: </b>$this->matricola</p>";
            parent::presentati();
        }

    }
?>