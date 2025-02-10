<?php
    class Alunno {
        protected $nome;
        protected $cognome;
        protected $eta;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
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

        public function getEta() {
            return $this->eta;
        }
        public function setEta($value) {
            $this->eta = $value;
        }

        public function showData(){
            echo "<p><b>Nome: </b>$this->nome</p>";
            echo "<p><b>Cognome: </b>$this->cognome</p>";
            echo "<p><b>Eta: </b>$this->eta</p>";
        }

    }

?>