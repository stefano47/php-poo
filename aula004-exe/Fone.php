<?php

class Fone {
    private $modelo;
    private $cor;
    private $carga;
    private $bluetooh;
    private $volume;
    
    function Fone($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->setBluetooh(false);
        $this->setCarga(100);
        $this->setVolume(50);
    }
    
    function ligar() {
        if (($this->getBluetooh() == false) && ($this->getCarga() > 0)) {
            $this->setBluetooh(true);
            $this->setCarga($this->getCarga() - 5);
            echo "<p>Fone ligado... CONECTADO</p>";
        } elseif($this->getCarga() == 0) {
            echo "<p>Não é possível ligar, o fone está com carga ZERO 000</p>";
        }
    }
    
    function desligar() {
        $this->setBluetooh(false);
        echo "<p>Fone desligado... DESCONECTADO</p>";
    }
            
    function aumentarVolume() {
        if ($this->getVolume() == 100) {
            echo "<p>Volume máximo!!!</p>";
        } elseif ($this->getBluetooh() == false) {
            echo "<p>Não é possível aumentar o volume com o fone desligado!!!</p>";
        } else {
            $this->setVolume($this->getVolume() + 10);
        }
    }
    
    function baixarVolume() {
        if ($this->getVolume() == 0) {
            echo "<p>Volume ZERO 000</p>";
        } elseif($this->getBluetooh() == false) {
            echo "<p>Não é possível baixar o volume com o fone desligado!!!</p>";
        } else {
            $this->setVolume($this->getVolume() - 10);
        }
    }
            
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getCarga() {
        return $this->carga;
    }

    function getBluetooh() {
        return $this->bluetooh;
    }

    function getVolume() {
        return $this->volume;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setBluetooh($bluetooh) {
        $this->bluetooh = $bluetooh;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }
}
