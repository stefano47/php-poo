<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero{
    public function enterrarOsso() {
        echo "<p>Enterrando osso...</p>";
    }
    
    public function balancarRabo() {
        echo "<p>Balançando rabo...</p>";
    }
    
    public function emitirSom() {
        echo "<p>Latindo...</p>";
    }
}
