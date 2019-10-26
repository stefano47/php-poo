<?php

require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;
    
    public function soltarBolhas() {
        echo "<p>Soltando bolhas...</p>";
    }
    
    public function locomover() {
        echo "<p>Nadando...</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo substâncias...</p>";
    }
    
    public function emitirSom() {
        echo "<p>Peixe não faz som...</p>";
    }
            
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
