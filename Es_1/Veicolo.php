<?php
    class Veicolo{
        //attributes
        public $marca;
        public $anno;

        //methods and constructors
        public function __construct($marca, $anno){
            $this->marca = $marca;
            $this->anno = $anno;
        }

        public function getMarca() {
        return $this->marca;
        }
        public function setMarca($value) {
        $this->marca = $value;
        }

        public function getAnno() {
        return $this->anno;
        }
        public function setAnno($value) {
        $this->anno = $value;
        }
    }
?>