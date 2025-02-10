<?php
    class Animale{
        //attributes
        public $nome;
        public $verso;

        //methods and constructors
        public function __construct($n, $v){
            $this->nome = $n;
            $this->verso = $v;
        }

        public function getVerso() {
        return $this->verso;
        }
        public function setVerso($value) {
        $this->verso = $value;
        }

        public function getNome() {
        return $this->nome;
        }
        public function setNome($value) {
        $this->nome = $value;
        }
    }

?>