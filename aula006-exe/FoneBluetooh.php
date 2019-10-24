<?php

require_once 'Fone.php';
class FoneBluetooh implements Fone {
    private $carga;
    private $volume;
    private $bluetooh;
    private $tocando;


    public function __construct() {
        $this->setBluetooh(false);
        $this->setCarga(50);
        $this->setVolume(3);
    }
    
    public function ligar() {
        if ($this->getCarga() > 0) {
            $this->setBluetooh(true);
        }
    }
    
    public function desligar() {
        if ($this->getBluetooh()) {
            $this->setBluetooh(false);
            $this->setCarga($this->getCarga() - 5);
        }
    }
    
    public function recarregar() {
        if ($this->getCarga() < 100) {
            $aux = 100 - $this->getCarga();
            $this->setCarga($this->getCarga() + $aux);
        }
    }
    
    public function aumentarVolume() {
        if ($this->getTocando() && $this->getVolume() < 10) {
            $this->setVolume($this->getVolume() + 1);
        }
    }
    
    public function baixarVolume() {
        if ($this->getTocando() && $this->getVolume() > 0) {
            $this->setVolume($this->getVolume() - 1);
        }
    }
    
    public function play() {
        if ($this->getBluetooh()) {
            $this->setTocando(true);
        }
    }
    
    public function pause(){
        if ($this->getBluetooh()) {
            $this->setTocando(false);
        }
    }
 
    public function status() {
        echo "<p>LIGADO: ".($this->getBluetooh()?"SIM":"NÃO")."</p>";
        echo "<p>CARGA: ".($this->getCarga())."</p>";
        echo "<p>VOLUME: ".($this->getVolume())."</p>";
        echo "<p>PlAY OU PAUSE: ".($this->getTocando()?"PLAY":"PAUSE")."</p>";
    }
            
    private function getCarga() {
        return $this->carga;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getBluetooh() {
        return $this->bluetooh;
    }

    private function setCarga($carga) {
        $this->carga = $carga;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setBluetooh($bluetooh) {
        $this->bluetooh = $bluetooh;
    }
    
    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
}
