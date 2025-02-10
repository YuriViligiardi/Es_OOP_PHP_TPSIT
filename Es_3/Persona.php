<?php
    class Persona{
        //attributes
        public $nome;
        public $cognome;

        //methods and constructors
        public function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($value) {
            $this->nome = $value;
        }

        public function getCognome() {
            return $this->cognome;
        }
        public function setCognome($value) {
            $this->cognome = $value;
        }

        public function presentati(){
            echo "<p><b>Nome: </b> $this->nome</p>";
            echo "<p><b>Cognome: </b> $this->cognome</p>";
        }
    }
    
?>