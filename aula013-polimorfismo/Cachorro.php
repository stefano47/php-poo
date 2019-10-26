<?php

require_once 'Lobo.php';

class Cachorro extends Lobo{
    private $dono;
    
    public function emitirSom() {
        echo "<p>Au! Au! Au! Auauauuu...</p>";
        echo "<hr>";
    }
    
    # sobrecarga
    public function reagirFrase($frase) {
        if ($frase == 'olá' || $frase == 'comida') {
            echo "<p>Abanar rabo...</p>";
            echo "<p>Au! Au! Au! Auauauuu...</p>";
            echo "<hr>";
        } else {
            echo "<p>Rosnar...</p>";
            echo "<hr>";
        }
    }
    
    public function reagirHora($hora) {
        if ($hora < 12) {
            echo "<p>Abanar rabo...</p>";
            echo "<hr>";
        } elseif($hora < 18) {
            echo "<p>Abanar rabo...</p>";
            echo "<p>Au! Au! Au! Auauauuu...</p>";
            echo "<hr>";
        } else {
            echo "<p>Ignorar...</p>";
            echo "<hr>";
        }
    }
    
    public function reagirDono($dono) {
        if ($this->getDono() == $dono) {
            echo "<p>Abanar rabo...</p>";
            echo "<hr>";
        } else {
            echo "<p>Rosnar...</p>";
            echo "<p>Au! Au! Au! Auauauuu...</p>";
            echo "<hr>";
        }
    }
    
    public function reagirIdadePeso($idade, $peso) {
        if ($idade <= 5) {
            if ($peso < 10) {
                echo "<p>Abanar rabo...</p>";
                echo "<hr>";
            } else {
                echo "<p>Au! Au! Au! Auauauuu...</p>";
                echo "<hr>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar...</p>";
                echo "<hr>";
            } else {
                echo "<p>Ignorar...</p>";
                echo "<hr>";
            }
        }
    }


    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }
}
