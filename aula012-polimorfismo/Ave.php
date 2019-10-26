<?php

require_once 'Animal.php';

class Ave extends Animal{
    private $corPena;
    
    public function fazerNinho(){
        echo "<p>Construindo um ninho...</p>";
    }
    
    public function locomover() {
        echo "<p>Voando...</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo grãos e frutas...</p>";
    }
    
    public function emitirSom() {
        echo "<p>Som de ave...</p>";
    }
            
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
