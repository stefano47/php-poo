<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{
    public function usarBolsa() {
        echo "<p>Canguru usando bolsa...</p>";
    }
    
    public function locomover() {
        echo "Pulando...";
    }
}
