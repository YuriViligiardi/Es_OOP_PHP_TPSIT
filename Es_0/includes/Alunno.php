<?php
    class Alunno implements JsonSerializable{
        protected $nome;
        protected $cognome;
        protected $eta;
        protected $voto = [];
        protected $indirizzo;
        protected $bocciato = false;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function jsonSerialize() : array {
            return [
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'eta' => $this->eta,
                'voti' => $this->voto,
                'indirizzo' => $this->indirizzo,
                'bocciato' => $this->bocciato,
            ];
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
        public function setVoto(voto $voto){
            $this->voto[] = $voto;
        }

        public function setIndirizzo(indirizzo $indirizzo) {
            $this->indirizzo = $indirizzo;
        }

        public function setBocciato(bool $bocciato) {
            $this->bocciato = $bocciato;
        }

        public function showData(){
            echo "Nome: $this->nome";
            echo "Cognome: $this->cognome";
            echo "Eta: $this->eta";
        }
    }
?>